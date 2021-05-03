<template>
    <div>
        <div class="card">
            <div class="card-header text-center mb-3">
                <h3>
                    Chọn ngày khám và chọn bác sĩ bạn muốn khám
                </h3>
            </div>
            <div class="card-body">
                <datepicker
                    class="my-datepicker"
                    calendar-class="my-datepicker_calendar"
                    :disabledDates="disabledDates"
                    :format="customDate"
                    v-model="time"
                    :inline="true"
                    :language="vi"
                ></datepicker>
            </div>
            <div class="card mt-5">
                <div class="card-header text-center">
                    <h3>
                        Danh sách các bác sĩ
                    </h3>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Số thứ tự</th>
                                <th></th>
                                <th>Bác sĩ</th>
                                <th>Chuyên Khoa</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(d, index) in doctors" :key="d.id">
                                <template v-if="!loading">
                                    <th scope="row">{{ index + 1 }}</th>
                                    <td>
                                        <img
                                            :src="'/images/' + d.doctor.image"
                                            width="80"
                                        />
                                    </td>
                                    <td>{{ d.doctor.name }}</td>
                                    <td>{{ d.doctor.department }}</td>
                                    <td>
                                        <a
                                            :href="
                                                '/appointment/' +
                                                    d.user_id +
                                                    '/' +
                                                    d.date
                                            "
                                            ><button class="btn btn-success">
                                                Xem lịch khám
                                            </button></a
                                        >
                                    </td>
                                </template>
                            </tr>
                            <td v-if="doctors.length == 0">
                                Không có bác sĩ nào trong ngày {{ this.time }}
                            </td>
                        </tbody>
                    </table>
                    <div class="text-center">
                        <pulse-loader
                            :loading="loading"
                            :color="color"
                            :size="size"
                        ></pulse-loader>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script type="text/javascript">
import datepicker from "vuejs-datepicker";
import moment from "moment";
import PulseLoader from "vue-spinner/src/PulseLoader.vue";
import { vi } from "vuejs-datepicker/dist/locale";
export default {
    data() {
        return {
            time: "",
            vi: vi,
            doctors: [],
            color: "#a5c422",
            size: "20px",
            loading: false,
            disabledDates: {
                to: new Date(Date.now() - 86400000)
            }
        };
    },
    components: {
        datepicker,
        PulseLoader
    },
    methods: {
        customDate(date) {
            this.loading = true;

            this.time = moment(date).format("DD-MM-YYYY");
            axios
                .post("/api/finddoctors", { date: this.time })
                .then(response => {
                    setTimeout(() => {
                        this.doctors = response.data;
                        this.loading = false;
                    }, 1000);
                })
                .catch(error => {
                    alert("error");
                });
        }
    },
    mounted() {
        //let time = moment(date).parseZone("Australia/Melbourne");
        this.loading = true;
        axios.get("/api/doctors/today").then(response => {
            this.doctors = response.data;
            this.loading = false;
        });
    }
};
</script>
<style scoped>
.my-datepicker >>> .my-datepicker_calendar {
    width: 100%;
    height: 330px;
    font-weight: bold;
}
</style>
