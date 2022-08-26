<template>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data User</h3>
            <div class="card-tools">
              <button
                type="button"
                class="btn btn-success btn-sm"
                @click="showModal"
              >
                Tambah Pengguna
              </button>
            </div>
          </div>

          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <tr>
                  <th>Nama User</th>
                  <th>Level</th>
                  <th>Email</th>
                  <th>Aksi</th>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>Edit | Hapus</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal-input" tabindex="-1" aria-labelledby="modal-input1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Input Data</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <form @submit.prevent="simpanData()">
            <div class="modal-body">
              <div class="form-group">
                <label>Nama</label>
                <input type="text" v-model="form.name" class="form-control" placeholder="Nama"/>
              </div>
              <div class="form-group">
                <label>Level</label>
                <select id="" class="form-control" v-model="form.level_id">
                    <option disabled selected>Pilih Level</option>
                    <option v-for="item in levels" :key="item.id" :value="item.id">{{ item.nama_level }}</option>
                </select>
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="text" v-model="form.email" class="form-control" placeholder="Email"/>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" v-model="form.password" class="form-control" placeholder="Password"/>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                Batal
              </button>
              <button type="submit" class="btn btn-primary">
                Simpan Perubahan
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End Modal -->
  </div>
</template>

<script>
import Form from "vform";

export default {
  data() {
    return {
      levels: {},
      form: new Form({
        id: "",
        level_id: "",
        name: "",
        email: "",
        password: "",
      }),
    };
  },
  methods: {
    showModal() {
      $("#modal-input").modal("show");
    },
    loadData() {
      axios.get("api/ambildatalevel").then(({ data }) => (this.levels = data));
    },
    simpanData(){
        this.form.post('api/user').then(() => {
            $("#modal-input").modal("hide");
        })
        .catch();
    }
  },
  created() {
    this.loadData();
  },
};
</script>
