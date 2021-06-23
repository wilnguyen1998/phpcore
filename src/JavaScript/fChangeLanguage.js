function changeValue(val) {
    if (val === "en")
        window.location.href = "?lang=en";
    else if (val === "vi")
        window.location.href = "?lang=vi";
    else
        window.location.href = "?lang=cn";
}