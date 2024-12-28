<!-- Modal -->
<div class="modal fade" id="inputMahasiswaModal" tabindex="-1" aria-labelledby="inputMahasiswaModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inputMahasiswaModalLabel">Input Data Mahasiswa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('mahasiswa.store') }}" id="mahasiswaForm">
                    @csrf

                    <div class="mb-3">
                        <label for="namaMhs" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control @error('namaMhs') is-invalid @enderror"
                            id="namaMhs" name="namaMhs" value="{{ old('namaMhs') }}" required>
                        @error('namaMhs')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nim" class="form-label">NIM</label>
                        <input type="text" class="form-control @error('nim') is-invalid @enderror"
                            id="nim" name="nim" value="{{ old('nim') }}" required>
                        @error('nim')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="ipk" class="form-label">IPK</label>
                        <input type="number" step="0.01" min="0" max="4"
                            class="form-control @error('ipk') is-invalid @enderror"
                            id="ipk" name="ipk" value="{{ old('ipk') }}" required>
                        @error('ipk')
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
