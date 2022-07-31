<template>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Data Level</div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <td>Nama Level</td>
                                    <td>Aksi</td>
                                </tr>
                                <tr v-for="item in levels" :key="item.message">
                                    <td>{{ item.nama_level }}</td>
                                    <td> Edit | Hapus </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                levels :{}
            };
        },
        methods: {
            loadData(){
                axios.get('api/ambildatalevel').then(({data}) => (this.levels = data));
            }
        },
        created() {
            this.loadData();
        }
    }
</script>
