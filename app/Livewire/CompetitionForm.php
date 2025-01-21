<?php
namespace App\Livewire;
use Livewire\Attributes\Rule; 
use Livewire\Component;
use App\Models\Participant;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ParticipantConfirmEmail;

class CompetitionForm extends Component
{
  #[Rule('required')]
  public $selection;

  #[Rule('required')]
  public $name;

  #[Rule('required')]
  public $street;

  #[Rule('required')]
  public $zip;

  #[Rule('required')]
  public $city;

  #[Rule('required|email')]
  public $email;

  #[Rule('required')]
  public $phone;

  #[Rule('accepted')]
  public $terms;

  public $is_submitted = FALSE;

  protected $state = 1;

  public function save()
  {
    $this->validate();
    
    $participant = Participant::firstOrCreate(
      ['email' => $this->email],
      [
        'selection' => $this->selection,
        'name' => $this->name,
        'street' => $this->street,
        'zip' => $this->zip,
        'city' => $this->city,
        'state_id' => $this->state,
        'phone' => $this->phone,
      ]
    );
    Notification::route('mail', $this->email)->notify(new ParticipantConfirmEmail($participant));
    $this->reset();
    $this->is_submitted = TRUE;
  }

  public function messages()
  {
    return [
      'selection.required' => 'Sofortpreis muss ausgewählt werden',
      'name.required' => 'Vor- und/oder Nachname fehlt',
      'street.required' => 'Strasse, Nr. fehlt',
      'zip.required' => 'PLZ fehlt',
      'city.required' => 'Ort fehlt',
      'email.required' => 'E-Mail fehlt',
      'email.email' => 'E-Mail ist ungültig',
      'phone.required' => 'Telefon fehlt',
      'terms.accepted' => 'Teilnahmebedingungen müssen akzeptiert werden',
    ];
  }

  public function render()
  {
    return view('livewire.competition');
  }
}
