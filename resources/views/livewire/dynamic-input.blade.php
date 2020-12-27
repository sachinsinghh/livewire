<div class="container">


    <form class="form" method="post">
            @csrf
<label>First Name:</label> <input type="text" name="first_name" />

            @livewire('step')
  <button type="submit">Submit</button>
    </form>
</div>
