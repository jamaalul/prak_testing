<div id="confirm-modal" class="fixed inset-0 z-50 flex items-center justify-center hidden">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-gray-900/50 backdrop-blur-sm"></div>
    
    <!-- Modal Content -->
    <div class="relative bg-white rounded-xl shadow-xl w-full max-w-md mx-4 overflow-hidden transform transition-all">
        <div class="p-6">
            <div class="flex items-center justify-center w-12 h-12 mx-auto bg-red-100 rounded-full mb-4">
                <i class="fas fa-exclamation-triangle text-red-600 text-xl"></i>
            </div>
            
            <h3 class="text-lg font-semibold text-center text-gray-900 mb-2" id="modal-title">Konfirmasi Hapus</h3>
            <p class="text-sm text-center text-gray-500 mb-6" id="modal-message">
                Apakah Anda yakin ingin menghapus data ini? Tindakan ini tidak dapat dibatalkan.
            </p>
            
            <div class="flex flex-col sm:flex-row-reverse gap-2">
                <button type="button" id="confirm-delete-btn" class="w-full inline-flex justify-center items-center px-4 py-2 border border-transparent rounded-lg shadow-sm text-sm font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors">
                    Hapus
                </button>
                <button type="button" onclick="closeModal()" class="w-full inline-flex justify-center items-center px-4 py-2 border border-gray-300 rounded-lg shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 transition-colors">
                    Batal
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    let deleteUrl = '';
    const modal = document.getElementById('confirm-modal');
    const modalTitle = document.getElementById('modal-title');
    const modalMessage = document.getElementById('modal-message');
    const confirmBtn = document.getElementById('confirm-delete-btn');

    function openDeleteModal(model, id) {
        deleteUrl = `{{ url('/api/delete') }}/${model}/${id}`;
        modalTitle.innerText = 'Konfirmasi Hapus';
        modalTitle.classList.remove('text-red-600');
        modalMessage.innerText = 'Apakah Anda yakin ingin menghapus data ini? Tindakan ini tidak dapat dibatalkan.';
        confirmBtn.style.display = 'inline-flex';
        modal.classList.remove('hidden');
    }

    function closeModal() {
        modal.classList.add('hidden');
    }

    confirmBtn.addEventListener('click', async function() {
        this.disabled = true;
        this.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Menghapus...';
        
        try {
            const response = await fetch(deleteUrl, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                }
            });

            const result = await response.json();

            if (response.ok) {
                // Success
                modalTitle.innerText = 'Berhasil';
                modalTitle.classList.add('text-green-600');
                modalMessage.innerText = result.message;
                confirmBtn.style.display = 'none';
                
                // Refresh table after short delay
                setTimeout(() => {
                    window.location.reload();
                }, 1500);
            } else {
                // Error (e.g. relation constraint)
                modalTitle.innerText = 'Gagal Menghapus';
                modalTitle.classList.add('text-red-600');
                modalMessage.innerText = result.message || 'Terjadi kesalahan saat menghapus data.';
                confirmBtn.style.display = 'none';
            }
        } catch (error) {
            modalTitle.innerText = 'Error';
            modalTitle.classList.add('text-red-600');
            modalMessage.innerText = 'Koneksi gagal atau terjadi kesalahan sistem.';
            confirmBtn.style.display = 'none';
        } finally {
            this.disabled = false;
            this.innerText = 'Hapus';
        }
    });
</script>
