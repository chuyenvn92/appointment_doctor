       <div class="modal fade" id="exampleModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Thông tin chi tiết</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <p><img src="{{asset('images')}}/{{$user->image}}" class="table-user-thumb" alt="" width="200"></p>
                    <p class="badge badge-pill badge-dark">Vai trò: {{ $user->role->name == 'doctor' ? 'Bác sĩ' : 'Quản trị viên' }}</p>
                    <p>Tên: {{$user->name}}</p>
                    <p>Giới tính: {{$user->gender}}</p>
                    <p>Email: {{$user->email}}</p>
                    <p>Địa chỉ: {{$user->address}}</p>
                    <p>Số điện thoại: {{$user->phone_number}}</p>
                    <p>Chuyên khoa: {{$user->department}}</p>
                    <p>Trình độ: {{$user->education}}</p>
                    <p>Giới thiệu chi tiết: {{$user->description}}</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Đóng</button>
                  </div>
                </div>
              </div>
            </div>
 