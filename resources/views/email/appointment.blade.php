Xin chào {{$mailData['name']}},
<p>Cảm ơn bạn đã đặt lịch khám bác sĩ tại bệnh viện đa khoa Hồng Phát</p>
<p>Thông tin về lịch khám bạn đặt như sau:</p>
Thời gian: {{$mailData['time']}}, ngày: {{ date('d-m-Y', strtotime($mailData['date'])) }}<br>
với bác sĩ {{$mailData['doctorName']}}<br>

<p>Bác sĩ của chúng tôi sẽ sớm phản hồi lại về lịch khám.</p>
<p>Nếu có bất cứ thắc mắc gì hãy liên hệ tới hotline 034.998.2248 nhé</p>
<p>Bệnh viện đa khoa Hồng Phát trân trọng cảm ơn!!!</p>