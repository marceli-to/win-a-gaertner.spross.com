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

  public function export()
  {
      $participants = Participant::all();

      // Set headers for file download
      header('Content-Type: text/csv; charset=utf-8');
      header('Content-Disposition: attachment; filename="win-a-gaertner-teilnehmer.csv"');
      header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
      header('Cache-Control: post-check=0, pre-check=0', false);
      header('Pragma: no-cache');
      header('Expires: 0');

      // Create file handle
      $csv = fopen('php://output', 'w');

      // Set semicolon delimiter
      fprintf($csv, chr(0xEF).chr(0xBB).chr(0xBF)); // Add UTF-8 BOM for Excel

      // Write headers
      fputcsv($csv, [
          'Vorname/Name',
          'Strasse/Nr.',
          'PLZ',
          'Ort',
          'E-Mail',
          'Telefon',
          'Sofortpreis',
          'E-Mail bestätigt am',
          'Status'
      ], ';', '"', "\\");

      // Write data
      foreach ($participants as $participant) {
          fputcsv($csv, [
              $participant->name,
              $participant->street,
              $participant->zip,
              $participant->city,
              $participant->email,
              $participant->phone,
              $participant->selection,
              $participant->email_verified_at ? date('d.m.Y', strtotime($participant->email_verified_at)) : null,
              $participant->state->name
          ], ';', '"', "\\");
      }

      fclose($csv);
      exit;
  }
}
