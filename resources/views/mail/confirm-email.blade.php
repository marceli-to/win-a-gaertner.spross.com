<x-mail::message>
  <div class="text-base pb-xlarge">
   Schön, dass Sie am «Win a Gärtner»-Wettbewerb teilnehmen!<br>Bitte bestätigen Sie Ihre E-Mail-Adresse mit einem Klick auf diesen Button:
   <br><br>
    <a href="{{ route('page.verify', ['uuid' => $data->uuid]) }}" class="btn-primary">E-Mail-Adresse bestätigen</a><br><br>
   Sie haben nicht am Wettbewerb teilgenommen und keine Ahnung, warum Sie dieses E-Mail bekommen? Dann können Sie diese Nachricht getrost ignorieren – Entschuldigung!
  </div>
  <div class="text-xsmall">
    <b>Probleme?</b><br>
    Sie haben auf den Button oben geklickt und es hat nicht funktioniert? Kopieren Sie diese URL und setzen Sie sie in Ihren Webbrowser ein:<br>{{ route('page.verify', ['uuid' => $data->uuid]) }}
  </div>
</x-mail::message>
