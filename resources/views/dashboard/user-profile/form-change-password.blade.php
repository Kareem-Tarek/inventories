<script>
    function show_hide_old_password(){
        const old_password_input = document.querySelector("#old_password");
        const dot_eye            = document.querySelector("#dot-eye-icon-old-password");

        if(old_password_input.getAttribute('type') === "password"){
            old_password_input.setAttribute('type', 'text'); //also => old_password_input.type = "text"; (but not preferred!)
            if(dot_eye.classList.contains("fa-eye")){
                dot_eye.classList.remove("fa-eye");
            }
            dot_eye.classList.add("fa-eye-slash");
            dot_eye.style.color = "grey";
        }
        else{
            old_password_input.setAttribute('type', 'password'); //also => old_password_input.type = "password"; (but not preferred!)
            if(dot_eye.classList.contains("fa-eye-slash")){
                dot_eye.classList.remove("fa-eye-slash");
            }
            dot_eye.classList.add("fa-eye");
            dot_eye.style.color = "inherit";
        }
    }

    function show_hide_new_password(){
        const new_password_input = document.querySelector("#new_password");
        const dot_eye            = document.querySelector("#dot-eye-icon-new-password");

        if(new_password_input.getAttribute('type') === "password"){
            new_password_input.setAttribute('type', 'text'); //also => new_password_input.type = "text"; (but not preferred!)
            if(dot_eye.classList.contains("fa-eye")){
                dot_eye.classList.remove("fa-eye");
            }
            dot_eye.classList.add("fa-eye-slash");
            dot_eye.style.color = "grey";
        }
        else{
            new_password_input.setAttribute('type', 'password'); //also => new_password_input.type = "password"; (but not preferred!)
            if(dot_eye.classList.contains("fa-eye-slash")){
                dot_eye.classList.remove("fa-eye-slash");
            }
            dot_eye.classList.add("fa-eye");
            dot_eye.style.color = "inherit";
        }
    }

    function show_hide_confirm_new_password(){
        const confirm_new_password_input = document.querySelector("#confirm_new_password");
        const dot_eye                    = document.querySelector("#dot-eye-icon-confirm-new-password");

        if(confirm_new_password_input.getAttribute('type') === "password"){
            confirm_new_password_input.setAttribute('type', 'text'); //also => confirm_new_password_input.type = "text"; (but not preferred!)
            if(dot_eye.classList.contains("fa-eye")){
                dot_eye.classList.remove("fa-eye");
            }
            dot_eye.classList.add("fa-eye-slash");
            dot_eye.style.color = "grey";
        }
        else{
            confirm_new_password_input.setAttribute('type', 'password'); //also => confirm_new_password_input.type = "password"; (but not preferred!)
            if(dot_eye.classList.contains("fa-eye-slash")){
                dot_eye.classList.remove("fa-eye-slash");
            }
            dot_eye.classList.add("fa-eye");
            dot_eye.style.color = "inherit";
        }
    }
</script>

<style>
    #dot-eye-icon-old-password,
    #dot-eye-icon-new-password,
    #dot-eye-icon-confirm-new-password{
        cursor: pointer;
        /* font-size: 120%;
        padding-top: 10px;
        z-index: 100; */
    }
</style>

<div class="form-group">
    <label>كلمة المرور الحالية <span class="text-danger">*</span></label>
    <div class="input-group">
        <input type="password" name="old_password" id="old_password" class="form-control @error('old_password') is-invalid @enderror" placeholder="أدخل كلمة المرور الحالية هنا...">
        <i onclick="show_hide_old_password();" id="dot-eye-icon-old-password" class="input-group-text fa-solid fa-eye"></i>
    </div>
    @error('old_password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label>كلمة الجديدة الجديدة <span class="text-danger">*</span></label>
    <div class="input-group">
        <input type="password" name="new_password" id="new_password" class="form-control @error('new_password') is-invalid @enderror" placeholder="أدخل كلمة المرور الجديدة هنا...">
        <i onclick="show_hide_new_password();" id="dot-eye-icon-new-password" class="input-group-text fa-solid fa-eye"></i>
    </div>
    @error('new_password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="form-group">
    <label>تأكيد كلمة المرور الجديدة <span class="text-danger">*</span></label>
    <div class="input-group">
        <input type="password" name="confirm_new_password" id="confirm_new_password" class="form-control" placeholder="قم بتأكيد كلمة المرور الجديدة هنا...">
        <i onclick="show_hide_confirm_new_password();" id="dot-eye-icon-confirm-new-password" class="input-group-text fa-solid fa-eye"></i>
    </div>
</div>
