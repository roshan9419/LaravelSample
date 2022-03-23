<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="container">
  <style>
    .imp::after {
      color: red;
      content: ' * '
    }
    .b {
      font-weight: 500;
    }

    label {
      font-size: 14px;
    }

  </style>  
  <br>
    <h2>My Personal Information</h2>
    <hr>
    <small style="color: red">(*) Indicates required field</small>
    <div class="mb-3"></div>

    <form class="container" action="{{ route('profile.add') }}" method="POST">
      @csrf
      <div class="row">
        <div class="form-group mr-2">
          <label class="imp b">First Name</label><br>
          <input type="text" name="firstName" required>
        </div>
        <div class="form-group mr-2">
          <label class="b">Middle Name</label><br>
          <input type="text" name="middleName">
        </div>
        <div class="form-group">
          <label class="imp b">Last Name</label><br>
          <input type="text" name="lastName" required>
        </div>
      </div>

      <div class="row">
        <div class="form-group mr-2">
          <label class="imp b">Your E-mail</label><br>
          <input type="email" name="email" required>
        </div>
        <div class="form-group">
          <label class="imp b">Contact No</label><br>
          <div class="row ml-1">
            <select name="phoneCode" required>
              <option value="+91">+91</option>
              <option value="other">Other</option>
            </select>
            <input type="text" name="phoneNumber" maxlength="10" required>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="form-group mr-2">
          <label class="imp b mr-3">Gender</label>
          <br>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="Male" required>
            <label class="form-check-label">Male</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="Female" required>
            <label class="form-check-label">Female</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="Other" required>
            <label class="form-check-label">Other</label>
          </div>
        </div>
        <div class="form-group mr-3">
          <label class="imp b">Age group</label><br>
          <select name="ageGroup" required>
            <option value="{{null}}">Select</option>
            @foreach ($ageGroups as $age)
              <option value="{{ $age }}">{{ $age }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group mr-2">
          <label class="imp b">Maritial Status</label><br>
          <select name="maritialStatus" required>
            <option value="{{null}}">Select</option>
            @foreach (['Married', 'Single', 'Prefer not to say'] as $status)
              <option value="{{ $status }}">{{ $status }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="row">
        <div class="form-group mr-2">
          <label class="imp b">State</label><br>
          <select name="state" required>
            <option value="{{null}}">Select your state</option>
            @foreach ($states as $state)
              <option value="{{ $state }}">{{ $state }}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group mr-2">
          <label class="imp b">City</label><br>
          <input type="text" name="city" required>
        </div>
        <div class="form-group">
          <label class="imp b">Pincode</label><br>
          <input type="text" name="pincode" required style="width: 140px">
        </div>
      </div>
      
      <div class="row">
        <div class="form-group">
          <label class="imp b">Write something about you</label><br>
          <textarea name="about" cols="75" rows="3" placeholder="I'm php developer..." required></textarea>
        </div>
      </div>

      <div class="row">
        <div class="form-group mr-2">
          <label class="b">Website</label><br>
          <input type="text" name="website">
        </div>
        <div class="form-group mr-2">
          <label class="b">LinkedIn</label><br>
          <input type="text" name="linkedin">
        </div>
        <div class="form-group">
          <label class="b">GitHub</label><br>
          <input type="text" name="github">
        </div>
      </div>

      <div class="row">
        <label class="imp b">Your working days</label>
      </div>

      <div class="row mb-3">
        @foreach (['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'] as $day)
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" name="workDays[]" value="{{ $day }}">
            <label class="form-check-label">{{ $day }}</label>
          </div>    
        @endforeach
      </div>

      <div class="row">
        <div class="form-group">
            <label for="expRange" class="form-label imp b">How much experience you have in industry?</label><br>
            <input type="range" class="form-range" min="0" max="10" step="1" value="1" name="experience" style="width: 580px">
        </div>
      </div>
  
      
      <div class="row mb-5">
        <input type="submit" value="Submit Details" class="btn btn-primary" style="background: royalblue">
      </div>

    </form>
</body>
</html>