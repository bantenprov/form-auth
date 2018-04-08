<template>
  <div>

    <div class="card mb-3">
      <div class="card-header d-flex flex-row justify-content-between align-items-center">
        <span>Profile Info</span>
        <router-link class="btn btn-sm btn-primary ml-2" :to="{ name: 'settings.user-profile' }"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i> Edit</router-link>
      </div>
      <div class="card-body">
        <div class="p-3 p-md-4 text-center mb-3">
          <img :src="user.user.photo_url" width="128" height="128" :alt="user.name">
        </div>
        <table class="table mb-0">
          <tbody>
            <tr>              
              <th scope="row" v-if="user.who == 'siswa'">Nomor UN</th>
              <th scope="row" v-if="user.who == 'non-siswa'">Username</th>
              <td>{{ user.user.name }}</td>
            </tr>
            <tr>
              <th scope="row">Email</th>
              <td>{{ user.user.email }}</td>
            </tr>
          </tbody>
        </table>
        
        <table class="table table-bordered mb-0 mt-5" v-if="user.who == 'siswa'">
          <thead class="thead-dark">
            <tr>
              <th scope="row">Jenis</th>              
              <th scope="row">Nilai Rata-Rata</th>
            </tr>
          </thead>
          <tbody>           
            <tr>              
              <td>Akademik</td>
              <td>{{ user.akademik }}</td>
            </tr>
            <tr>              
              <td>Prestasi</td>
              <td>{{ user.prestasi }}</td>
            </tr>
            <tr>              
              <td>SKTM</td>
              <td>{{ user.sktm }}</td>
            </tr>
            <tr>              
              <td>Zona</td>
              <td>{{ user.zona }}</td>
            </tr>
          </tbody>
        </table>
      </div><!-- /.card-body -->
    </div><!-- /.card -->

  </div>
</template>

<script>
import { mapGetters } from 'vuex';

export default {
  computed: mapGetters({
    user: 'authUser'    
  }),

  mounted(){
    console.log('a')
    this.$store.dispatch('fetchUser')
  }
}
</script>
