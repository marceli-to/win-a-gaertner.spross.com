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

  #[Rule('required', 'email')]
  public $email;

  #[Rule('required')]
  public $phone;

  #[Rule('required')]
  public $privacy;

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

  public function render()
  {
    return view('livewire.competition');
  }
}
