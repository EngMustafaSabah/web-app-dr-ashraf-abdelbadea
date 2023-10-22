<h2>Hello Admin,</h2>
You received an New Contact<br>
there are the details:<br>
<b>name:</b> {{ $contact->patient->name ??"" }}<br>
<b>Email:</b> {{ $contact->patient->email ??"" }}<br>
<b>message :</b> {{ $contact->message ??"" }}<br>

Thank You
