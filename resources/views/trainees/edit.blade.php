<form action="{{ route('trainees.update', $trainee->id) }}" method="POST">
    @csrf
    @method('PUT')
    <!-- Otros campos -->
    
    <label for="responsible_name">Responsible Name:</label>
    <input type="text" name="responsible_name" id="responsible_name" value="{{ $trainee->responsible_name }}" required>
    
    <!-- Otros campos -->
    <button type="submit">Update</button>
</form>
