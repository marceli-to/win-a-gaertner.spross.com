<x-mail::message>
  <div class="text-base pb-xlarge">
    Vielen Dank für Ihre Teilnahme an unserem Wettbewerb!<br><br>
    Um Ihre Teilnahme abzuschliessen, bitten wir Sie, Ihre E-Mail-Adresse zu bestätigen.<br><br>
    Klicken Sie dazu einfach auf den folgenden Button:<br><br>
    <a href="{{ route('page.verify', ['uuid' => $data->uuid]) }}" class="btn-primary">E-Mail Adresse bestätigen</a><br><br>
    Falls Sie am Wettbewerb nicht teilgenommen haben oder diese E-Mail fälschlicherweise erhalten haben, können Sie diese Nachricht ignorieren.
  </div>  
  <div class="text-xsmall">
    Wenn Sie Probleme haben, den "E-Mail Adresse überprüfen"-Button zu klicken, kopieren Sie die URL unten und fügen Sie sie in Ihren Webbrowser ein:<br>{{ route('page.verify', ['uuid' => $data->uuid]) }}
  </div>
</x-mail::message>
