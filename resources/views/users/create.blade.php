<x-layout>
  <x-slot name="title">Add User</x-slot>
  <form method="POST" action="{{ route('users.store')}}">
    @csrf
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" id="name" name="name" />
    </div>
    <input type="submit" class="btn btn-primary" value="Add User" />
  </form>
</x-layout>
