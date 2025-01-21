<?php
namespace App\Http\Controllers\Api;
use App\Models\Participant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParticipantController extends Controller
{
  public function index()
  {
    return response()->json(Participant::with('state')->get());
  }

  public function update(Participant $participant, Request $request)
  {
    $participant->update([
      'state_id' => $request->state
    ]);
    return response()->json($participant);
  }

  public function destroy(Participant $participant)
  {
    $participant->delete();
    return response()->json(['message' => 'Participant deleted successfully']);
  }
}