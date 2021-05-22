<div class="modal fade" id="exampleModal{{ $booking->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Chi tiết lịch đặt</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Bệnh nhân yêu cầu: {{ $booking->user->name }} <br>
                    <img src="{{ asset('profile') }}/{{ $booking->user->image }}" class="table-user-thumb"
                        alt="chưa có ảnh" width="200">
                </p>
                <p>Chuyên khoa: {{ $booking->doctor->department }}</p>
                <p>Ngày khám: {{ date('d-m-Y', strtotime($booking->date)) }}</p>
                <p>Thời gian:
                    <span class="badge badge-pink">{{ $booking->time }}</span>
                </p>
                <p>Trạng thái:
                    @if ($booking->status == 0)
                        <span class="btn btn-warning">Chờ xác nhận</span>
                    @elseif ($booking->status == 1)
                        <span class="btn btn-info">Đã xác nhận</span>
                    @elseif ($booking->status == 2)
                        <span class="btn btn-info">Đã khám</span>
                    @else
                        <span class="btn btn-danger">Đã huỷ</span>
                    @endif
                </p>
                @if ($booking->date < date('Y-m-d'))
                    <b>Đã quá thời gian xác nhận lịch hẹn</b>
                @else
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
