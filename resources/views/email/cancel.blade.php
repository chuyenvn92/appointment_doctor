Xin chào {{$mailData['name']}},
<p>Cảm ơn bạn đã đặt lịch khám bác sĩ tại bệnh viện đa khoa Hồng Phát vào ngày {{ date('d-m-Y', strtotime($mailData['date'])) }}, thời gian lúc {{$mailData['time']}}</p>
<p>Tuy nhiên Bác sĩ {{$mailData['doctorName']}} có đã có việc đột xuất nên không thể khám vào khung giờ bạn đã chọn.</p>
<p>Để trải nghiệm thăm khám của bạn không bị gián đoạn vui lòng chọn khung giờ khám khác nhé!!!</p>
<b>Xin lỗi vì sự bất tiện này.</b>