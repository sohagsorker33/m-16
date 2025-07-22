
 <h1>Your Result is {{$result}}</h1>

@if($result>=80)
   <h1>This is a A+</h1>
@elseif($result>=70)
   <h1>THis is a A</h1>
@elseif($result>=60)
  <h1>This is a A-</h1>
@elseif($result>=50)
  <h1>This is a B</h1>
@elseif ($result>=40)
  <h1>This is a C</h1>
@elseif ($result>=33)
  <h1>This is a D</h1>
@else 
   <h1>This is a Fail</h1>

@endif