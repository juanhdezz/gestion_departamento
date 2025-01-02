<form action="{{ route('trainees.store') }}" method="POST">
    @csrf
    <!-- Otros campos -->
    
    <label for="responsible_name">Responsible Name:</label>
    <input type="text" name="responsible_name" id="responsible_name" required>
    
    <!-- Otros campos -->
    <button type="submit">Submit</button>
</form>
