<!-- Modal -->
<div class="modal fade" id="inputKRSModal" tabindex="-1" aria-labelledby="inputKRSModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inputKRSModalLabel">Pilih Mata Kuliah</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('mahasiswa.update', $mahasiswa->id) }}" id="mahasiswaForm">
                    @csrf
                    {{-- @method('PUT') --}}
                    <div class="mb-3">
                        <label for="matakuliah" class="form-label">Mata Kuliah</label>
                        <select class="form-select @error('matakuliah') is-invalid @enderror" id="matakuliah" name="matakuliah" required>
                            <option value="">Pilih Mata Kuliah</option>
                            @foreach($jadwalMatakuliah as $id => $matakuliah)
                                <option value="{{ $id }}" {{ old('matakuliah') == $id ? 'selected' : '' }}>{{ $matakuliah }}</option>
                            @endforeach
                        </select>
                        @error('matakuliah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
