<?php
namespace App\Livewire;
use Livewire\Attributes\Rule; 
use Livewire\Component;
use App\Models\Participant;
use Illuminate\Support\Facades\Notification;
use App\Notifications\ParticipantConfirmEmail;

class CompetitionForm extends Component
{
  #[Rule('accepted')]
  public $selection;

  #[Rule('required')]
  public $name;

  #[Rule('required')]
  public $street;

  #[Rule('required')]
  public $zip;

  #[Rule('required')]
  public $city;

  #[Rule('required', 'email')]
  public $email;

  #[Rule('required')]
  public $phone;

  #[Rule('accepted')]
  public $terms;

  public function save()
  {
    $this->validate();
    
    $participant = Participant::create(
      $this->only([
        'selection',
        'name', 
        'street',
        'zip',
        'city',
        'email', 
        'phone',
      ])
    );

    Notification::route('mail', $contact->email)->notify(new ContactUserEmail($contact));
    session()->flash('status', 'Inquiry was submitted');
    $this->reset();
    redirect()->route('page.home');
  }

  public function messages()
  {
    return [
      'selection.accepted' => 'Sofortpreis muss ausgewählt werden',
      'name.required' => 'Vor- und Nachname fehlt',
      'street.required' => 'Strasse, Nr. fehlt',
      'zip.required' => 'PLZ fehlt',
      'city.required' => 'Ort fehlt',
      'email.email' => 'E-Mail ist ungültig',
      'email.required' => 'E-Mail fehlt',
      'phone.required' => 'Telefon fehlt',
      'terms.accepted' => 'Teilnahmebedingungen müssen akzeptiert werden',
    ];
  }

  public function render()
  {
    return view('livewire.competition');
  }
}
