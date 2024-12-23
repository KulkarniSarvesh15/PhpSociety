/*!
    * Start Bootstrap - SB Admin Pro v2.0.3 (https://shop.startbootstrap.com/product/sb-admin-pro)
    * Copyright 2013-2021 Start Bootstrap
    * Licensed under SEE_LICENSE (https://github.com/StartBootstrap/sb-admin-pro/blob/master/LICENSE)
    */
window.addEventListener('DOMContentLoaded', event => {
    // Activate feather
    feather.replace();

    // Enable tooltips globally
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Enable popovers globally
    var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
    var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
        return new bootstrap.Popover(popoverTriggerEl);
    });

    // Activate Bootstrap scrollspy for the sticky nav component
    const stickyNav = document.body.querySelector('#stickyNav');
    if (stickyNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#stickyNav',
            offset: 82,
        });
    }

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sidenav-toggled'));
        });
    }

    // Close side navigation when width < LG
    const sidenavContent = document.body.querySelector('#layoutSidenav_content');
    if (sidenavContent) {
        sidenavContent.addEventListener('click', event => {
            const BOOTSTRAP_LG_WIDTH = 992;
            if (window.innerWidth >= 992) {
                return;
            }
            if (document.body.classList.contains("sidenav-toggled")) {
                document.body.classList.toggle("sidenav-toggled");
            }
        });
    }

    // Add active state to sidbar nav links
    let activatedPath = window.location.pathname.match(/([\w-]+\.html)/, '$1');

    if (activatedPath) {
        activatedPath = activatedPath[0];
    } else {
        activatedPath = 'index.html';
    }

    const targetAnchors = document.body.querySelectorAll('[href="' + activatedPath + '"].nav-link');

    targetAnchors.forEach(targetAnchor => {
        let parentNode = targetAnchor.parentNode;
        while (parentNode !== null && parentNode !== document.documentElement) {
            if (parentNode.classList.contains('collapse')) {
                parentNode.classList.add('show');
                const parentNavLink = document.body.querySelector(
                    '[data-bs-target="#' + parentNode.id + '"]'
                );
                parentNavLink.classList.remove('collapsed');
                parentNavLink.classList.add('active');
            }
            parentNode = parentNode.parentNode;
        }
        targetAnchor.classList.add('active');
    });
});


function Password() {
    const Password = document.getElementById("newPassword").value.trim();
    const ConfirmPassword = document.getElementById("confirmPassword").value.trim();
    if (Password === "") {
        var Id = document.getElementById("Save");
        Id.classList.add("disabled");
    }
    else {
        var Id = document.getElementById("Save");
        const ConfirmPassword = document.getElementById("confirmPassword").value.trim();
        Id.classList.add("disabled");
        if (ConfirmPassword === Password) {
            var CId = document.getElementById("Save");
            CId.classList.remove("disabled");
        }
        else if (ConfirmPassword !== Password) {
            var CId = document.getElementById("Save");
            CId.classList.add("disabled");
        }
    }
}
function ConfirmPassword() {
    const Password = document.getElementById("newPassword").value.trim();
    const ConfirmPassword = document.getElementById("confirmPassword").value.trim();
    if (ConfirmPassword === "") {
        var Id = document.getElementById("Save");
        Id.classList.add("disabled");
    }
    else if (ConfirmPassword !== Password) {
        var Id = document.getElementById("Save");
        Id.classList.add("disabled");
    }
    else {
        var Id = document.getElementById("Save");
        Id.classList.remove("disabled");
    }
}

function MemberRegistrationMandate() {
    const ID = document.getElementById("inputMembershipID").value.trim();
    const FName = document.getElementById("inputMemberFirstName").value.trim();
    const LName = document.getElementById("inputMemberLastName").value.trim();
    if (ID === "" || FName === "" || LName === "") {
        var Save = document.getElementById("MemberRegistrationSave");
        Save.disabled = true;
    }
    else {
        var Save = document.getElementById("MemberRegistrationSave");
        Save.disabled = false;
    }
}

//OTP Verification
function OTPVerify() {
    const OTP = document.getElementById("twoFactorSMS").value.trim();
    let pattern = /\d{6}/g;
    let len = OTP.length;
    if (OTP != "" && len===6 && OTP.match(pattern)) {
        var Save = document.getElementById("Verify");
        Save.disabled = false;
    }
    else {
        var Save = document.getElementById("Verify");
        Save.disabled = true;
    }
}

//MemberRegistration - Form Submission
function MemberRegistrationSubmit() {
    document.getElementById("MemberDetails").submit();
    //document.getElementById("UnitAgreement").submit();
}

//UnitAllocation - Form Submission
function UnitAllocationSubmit() {
    document.getElementById("UnitDetails").submit();
}