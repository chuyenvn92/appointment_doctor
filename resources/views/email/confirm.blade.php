Xin chào {{$mailData['name']}},
<p>Cảm ơn bạn đã đặt lịch khám bác sĩ tại bệnh viện đa khoa Hồng Phát</p>
<p>Bác sĩ {{$mailData['doctorName']}} đã xác nhận lịch hẹn khám của bạn vào ngày {{ date('d-m-Y', strtotime($mailData['date'])) }} thời gian {{$mailData['time']}}.</p>
<b>Bạn hãy đến khám đúng giờ nhé</b>