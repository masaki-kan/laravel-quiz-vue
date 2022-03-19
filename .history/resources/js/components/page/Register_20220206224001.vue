<template>
  <div>
    <main>
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="card card-default">
              <div class="card-header text-center">ユーザー登録</div>

              <div class="panel-body">
                <form
                  class="form-horizontal"
                  ref="observer"
                  action="/register"
                  id="register"
                  method="post"
                >
                  <div class="form-group">
                    <div class="row">
                      <label
                        for="name"
                        class="col-md-4 col-form-label text-md-right"
                        >名前</label
                      >

                      <div class="col-md-6">
                        <input
                          v-model="state.name"
                          name="name"
                          type="text"
                          class="form-control"
                        />
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <label
                        for="email"
                        class="col-md-4 col-form-label text-md-right"
                        >メールアドレス</label
                      >

                      <div class="col-md-6">
                        <input
                          v-model="state.email"
                          name="email"
                          type="email"
                          class="form-control"
                        />
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <label
                        for="password"
                        class="col-md-4 col-form-label text-md-right"
                        >パスワード</label
                      >

                      <div class="col-md-6">
                        <input
                          v-model="state.password"
                          name="password"
                          type="password"
                          class="form-control"
                        />
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="row">
                      <label
                        for="password-confirm"
                        class="col-md-4 col-form-label text-md-right"
                        >パスワード再確認</label
                      >

                      <div class="col-md-6">
                        <input
                          v-model="state.password_confirmation"
                          name="password_confirmation"
                          type="password"
                          class="form-control"
                        />
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">
                        登録
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
  </div>
</template>

<script>
import { reactive } from "@vue/composition-api";

export default {
  setup(props, context) {
    const state = reactive({
      name: "",
      email: "",
      password: "",
      password_confirmation: "",
    });

    return {
      state,
    };
  },
};
</script>

