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
