<h2>Hello Admin,</h2>
You received an New request for appointment<br>
there are the details:<br>
<b>name:</b> {{ $appointment->patient->name ??"" }}<br>
<b>Email:</b> {{ $appointment->patient->email ??"" }}<br>
<b>Date  :</b> {{ $appointment->appointment_date ??"" }}<br>
<b>note :</b> {{ $appointment->note ??"" }}<br>

Thank You
