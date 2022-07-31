<template>
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data User</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-success btn-sm" @click="showModal">
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
    <!-- Modal -->
<div class="modal fade" id="modal-input" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
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
      form: new Form({
        id: "",
      }),
    };
  },
  methods: {
    showModal() {
      $('#modal-input').modal('show');
    },
  },
  created() {},
};
</script>
