<template>
  <div class="c-subheader px-3 bg-gray-600 d-flex justify-content-center">
    <ol class="breadcrumb border-0 mb-0">
    <li role="presentation" class="breadcrumb-item">
        <router-link to="/UserInfoI" class="router-link-active color-red"  target="_self">
    Get User Info </router-link>
       </li>
      <li role="presentation" class="breadcrumb-item ">
       <router-link to="/SingUp" class="router-link-active color-red"  target="_self">
    Add new User </router-link>
      
         </li>
      <li role="presentation" class="breadcrumb-item ">
        <router-link to="/" class="router-link-active color-red"  target="_self">
   Contact Us </router-link>


         </li>
            <li role="presentation" class="breadcrumb-item ">
        <router-link to="GetUserInfo" class="router-link-active color-red"  target="_self">
   Find User </router-link>
         </li>
        </ol>
        </div>
          <router-view></router-view>


          <footer data-v-51d170c5="" class="c-footer fixed-bottom">
            <div>
              <a href="https://coreui.io" target="_blank">
              CoreUI</a><span class="ml-1">
                © 2021 Endeavor</span>
                </div>
                <div class="mfs-auto">
                  <span target="_blank" class="mr-1">
                    Managed by
                    </span>
                                        </div>
                    </footer>
</template>
<script>

</script>
