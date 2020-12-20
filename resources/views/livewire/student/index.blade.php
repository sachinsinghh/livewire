
<div class="container-fluid">

    <div wire:ignore.self   class="modal fade" id="addStudentModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="">
                  <div class="form-group">
                    <label for="firstName">First Name:</label>
                    <input type="text" name="first_name" wire:model="first_name" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="lastName">Last Name:</label>
                      <input type="text" name="last_name" wire:model="last_name" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="email">Email:</label>
                      <input type="email" name="email" wire:model="email" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="contact">Phon:</label>
                      <input type="text" name="contact" wire:model="phone" class="form-control">
                    </div>


                </form>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" wire:click.prevent="store()">Add</button>
            </div>
          </div>
        </div>
      </div>
</div>

<div>

    <div class="col-md-6 mb-4">

        <!-- Search form -->
        <input class="form-control" type="text" placeholder="Search" aria-label="Search">

      </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addStudentModal">
                Add Student
              </button>




    </div>


    <table class="table table-striped">
        <thead>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
          </tr>
        </thead>
        <tbody>
            @foreach($students as $student)
          <tr>
            <td>{{ $student->first_name }}</td>
            <td>{{ $student->last_name }}</td>
            <td>{{ $student->email }}</td>
            <td>{{ $student->phone }}</td>
          </tr>
@endforeach
        </tbody>
    </table>
</div>





<div style="float: right">
    {{ $students->links() }}
</div>
</div>

</div>




