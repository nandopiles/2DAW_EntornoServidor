/**
 * Redirects to the php router file to load the property information depending on the option selected.
 * @returns {void}
 */
const redirect = () => {
    const selectedController = document.getElementById("selectController").value;

    if (selectedController !== "") {
        window.location.href = "Router.php?action=" + selectedController;
    }
}