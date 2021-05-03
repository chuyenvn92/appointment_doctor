<div class="modal fade" id="exampleModal{{ $guest->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chi tiết bệnh nhân</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p><b>Tên:</b> {{ $guest->name }}</p>
                <p><b>Email:</b> {{ $guest->email }}</p>
                <p><b>Số điện thoại:</b> {{ $guest->phone }}</p>
                <p><b>Chuyên khoa muốn khám:</b> {{ $guest->specialist }}</p>
                <p><b>Ngày muốn khám:</b> {{date('d-m-Y', strtotime($guest->date))}}</p>
                <p><b>Yêu cầu chi tiết:</b> {{ $guest->message }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
