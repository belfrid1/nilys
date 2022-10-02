function kknewsletterSaveCookies() {
    let e = new Date();
    e.setTime(e.getTime() + 864e5 * parseInt(config.remember_day)),
        (expires = "; expires=" + e.toUTCString()),
        (document.cookie =
            kknewsletterCookies +
            "=" +
            (config.remember_day || "") +
            expires +
            ";");
}
function kknewsletterCookiesExist() {
    let e = !1,
        t = document.cookie.split(";");
    for (let o of t) o.indexOf(kknewsletterCookies + "=") > -1 && (e = !0);
    return e;
}
function kknewsletterModalVisibility(e = "show") {
    $("#newsletter-bbloc442").modal(e);
}
function kknewsletterFormUI(e = "loading") {
    let t = "1",
        o = "0",
        s = "none";
    "loading" == e
        ? ((t = 0.4), (o = 1))
        : "default" == e
            ? ((t = 1), (o = 0))
            : "finish" == e &&
            ((s = "block"),
                $(
                    "#newsletter-bbloc442 form input, #newsletter-bbloc442 form button"
                ).css({ display: "none" })),
        $("#newsletter-bbloc442 form").css({ opacity: t }),
        $("#newsletter-bbloc442 .progress-bar").css({ opacity: o }),
        $("#newsletter-bbloc442 form .statut-reponse").css({ display: s });
}
function kknewsletterFormApiReponse(e, t) {
    $("#newsletter-bbloc442 form .statut-reponse").css({
        color: "success" == e ? "#50cd89" : "#f1416c",
        display: "block",
    }),
        $("#newsletter-bbloc442 form .statut-reponse").text(t);
}
let kknewsletterDefaultSuccessMessage =
        "âœ“ You have successfully subscribed to our newsletter",
    kknewsletterDefaultErrorMessage =
        "âŠ— Something went wrong, please try again later",
    getScript = document.getElementById("kknewsletter442"),
    kknewsletterCookies = "kknewsletter-cookies",
    kknewsletter442Modal = `    <!--begin::Modal - Create App-->
        <div class="modal fade" id="newsletter-bbloc442" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered  col-lg-6 offset-lg-3">
                <!--begin::Modal content-->
                <div class="modal-content">
                    <!-- Line progress -->
                    <div class="progress-bar">
                        <div class="progress-bar-value"></div>
                    </div>
                    <!--begin::Modal body-->
                    <div class="modal-body py-lg-10 px-lg-10">
                        <!--begin::Stepper-->
                        <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid">
                            <!--begin::Aside-->
                            <div class="w-100 ">
                                <!--begin::Nav-->
                                <form method="GET" action="#">
                                    <h2>Newsletter</h2>
                                    <p>Want to get updates to your mailbox? ðŸ“¬ <br>Subscribe to our newsletter!</p>
                                    <p class="statut-reponse">Message de retour test</p>
                                    <input name="kknewsletter442-name" id="kknewsletter442-name" type="text" required
                                        placeholder="Your name" />
                                    <input name="kknewsletter442-email" id="kknewsletter442-email" type="email" required
                                        placeholder="Your email address" class="email" />
                                    <button class="submit">Subscribe</button>
                                    <span class="newsletter-close">x</span>
                                </form>
                                <!--end::Nav-->
                            </div>
                        </div>
                        <!--end::Stepper-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>`,
    config = {
        domain: getScript.getAttribute("data-api-domain"),
        api: getScript.getAttribute("data-api-url"),
        remember_day: 10,
        popup_guid: getScript.getAttribute("data-popup-guid"),
        popup_group_guid: getScript.getAttribute("data-popup-group-guid"),
    };
$(document).ready(function () {
    null == document.getElementById("newsletter-bbloc442") &&
    $("body").append(kknewsletter442Modal),
    kknewsletterCookiesExist() ||
    setTimeout(() => {
        kknewsletterModalVisibility("show");
    }, 5e3),
        $(".newsletter-close").on("click", () => {
            kknewsletterModalVisibility("hide"), kknewsletterSaveCookies();
        }),
        $("#newsletter-bbloc442 form").on("submit", (e) => {
            e.preventDefault(), kknewsletterFormUI("loading");
            fetch(
                config.api +
                `?firstname=${
                    document.getElementById("kknewsletter442-name").value
                }&email=${
                    document.getElementById("kknewsletter442-email").value
                }&domain=${config.domain}&url=${
                    window.location.origin
                }&popup_guid=${config.popup_guid}&group_guid=${
                    config.popup_group_guid
                }`
            )
                .then((e) => e.json())
                .then((e) => {
                    kknewsletterFormUI("default"),
                        e.statut
                            ? (kknewsletterSaveCookies(),
                                kknewsletterFormUI("finish"),
                                kknewsletterFormApiReponse(
                                    "success",
                                    kknewsletterDefaultSuccessMessage
                                ))
                            : kknewsletterFormApiReponse(
                                "error",
                                e.error
                                    ? "âŠ—" + e.error
                                    : kknewsletterDefaultErrorMessage
                            );
                })
                .catch((e) => {
                    kknewsletterFormUI("default"),
                        kknewsletterFormApiReponse(
                            "error",
                            "âŠ—" + kknewsletterDefaultErrorMessage
                        );
                });
        });
});
