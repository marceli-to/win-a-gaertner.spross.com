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
  public $selection = 'Baumcheck';

  #[Rule('required')]
  public $name = 'Marcel Stadelmann';

  #[Rule('required')]
  public $street = 'Feldgasse 3';

  #[Rule('required')]
  public $zip = '8000';

  #[Rule('required')]
  public $city = 'Zürich';

  #[Rule('required', 'email')]
  public $email = 'm@marceli.to';

  #[Rule('required')]
  public $phone = '079 123 45 67';

  #[Rule('accepted')]
  public $terms;

  public $is_submitted = FALSE;

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
