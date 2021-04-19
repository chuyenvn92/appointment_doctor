@if (count($bookings) > 0)
    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{ $booking->user_id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <form action="{{ route('prescription') }}" method="post">@csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Đơn thuốc</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="app">

                        <input type="hidden" name="user_id" value="{{ $booking->user_id }}">
                        <input type="hidden" name="doctor_id" value="{{ $booking->doctor_id }}">
                        <input type="hidden" name="date" value="{{ $booking->date }}">

                        <div class="form-group">
                            <label>Tên bệnh</label>
                            <input type="text" name="name_of_disease" class="form-control" required="">
                        </div>
                        <div class="form-group">
                            <label>Triệu chứng</label>

                            <textarea name="symptoms" class="form-control" placeholder="Triệu chứng"
                                required=""></textarea>
                        </div>

                        <div class="form-group">
                            <label>Loại thuốc</label>
                            <add-btn></add-btn>
                        </div>
                        <div class="form-group">
                            <label>Cách dùng thuốc</label>

                            <textarea name="procedure_to_use_medicine" class="form-control"
                                placeholder="Cách dùng thuốc" required=""></textarea>
                        </div>
                        <div class="form-group">
                            <label>Ghi chú</label>

                            <textarea name="feedback" class="form-control" placeholder="Ghi chú" required=""></textarea>


                        </div>
                        <div class="form-group">
                            <label>Chữ kí</label>
                            <input type="text" name="signature" class="form-control" required="">
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                        <button type="submit" class="btn btn-primary">Lưu</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endif
