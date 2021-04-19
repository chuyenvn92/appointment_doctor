<template>
    <div>
        <div class="form-group" v-for="(input, index) in inputs" :key="index">
            <input type="text" name="medicine[]" class="form-control" />
            <span>
                <a class="btn btn-info mt-1"
                    href=""
                    @click.prevent="add(index)"
                    v-show="index == inputs.length - 1"
                    >Thêm</a
                >
                <a class="btn btn-danger mt-1"
                    href=""
                    @click.prevent="remove(index)"
                    v-show="index || (!index && inputs.length > 1)"
                    >Xoá</a
                >
            </span>
        </div>
    </div>
</template>

<script type="text/javascript">
export default {
    data() {
        return {
            inputs: [{}]
        };
    },
    methods: {
        add() {
            this.inputs.push({
                medicine: ""
            });
        },
        remove(index) {
            this.inputs.splice(index, 1);
        }
    }
};
</script>
