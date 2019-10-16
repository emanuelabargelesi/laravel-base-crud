<a href="{{ route('employee.index') }}">BACK</a>
  <div class="edit">
    <form method="post" action="{{ route('employee.store') }}">
      @csrf
      @method('POST')
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="">
      </div>
      <div class="form-group">
        <label for="lastname">Lastname</label>
        <input type="text" name="lastname" value="">
      </div>
      <div class="form-group">
        <label for="birthday">Birthday</label>
        <input type="text" name="birthday" value="">
      </div>
      <div class="form-group">
        <label for="jobtitle">Jobtitle</label>
        <input type="text" name="jobtitle" value="">
      </div>
      <div class="form-group">
            <label for="salary">Salary</label>
            <input type="text" name="salary" value="">
          </div>
      <button type="submit">Save</button>
    </form>
  </div>