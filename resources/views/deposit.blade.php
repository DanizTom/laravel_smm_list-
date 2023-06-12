<form action="{{ route('deposit') }}" method="POST">
    @csrf
    <div>
        <label for="user_id">User:</label>
        <select name="user_id" id="user_id">
            @foreach ($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label for="amount">Amount:</label>
        <input type="number" name="amount" id="amount" step="0.01" required>
    </div>
    <button type="submit">Deposit</button>
</form>