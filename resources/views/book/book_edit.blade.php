<!-- ambil dari add trus tambahin value, misal
value="{{ $dt-> title }}"
kalau ada dropdown
@foreach($genre as $gr)
<option value="{{ $gr-> id }}" {{ ($dt ->genre == $gr->id) ? 'selected' : '' }}>{{ $gr->name }}</option>
@endforeach -->