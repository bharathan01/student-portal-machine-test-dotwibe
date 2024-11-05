function dialogBox(fileUrl) {
  const allApplicationContainer = document.getElementById("allApplication-sec");

  const div = document.createElement("div");
  div.style.width = "400px";
  div.style.height = "400px";
  div.style.position = "absolute";
  div.style.top = "30%";
  div.style.left = "35%";
  div.style.backgroundColor = "white";
  div.style.padding = "20px";
  div.style.boxShadow = "0 4px 8px rgba(0, 0, 0, 0.2)";
  div.style.borderRadius = "8px";
  div.style.overflow = "auto";

  const fileExtension = fileUrl.split(".").pop().toLowerCase();

  if (fileExtension === "jpg" || fileExtension === "png") {
    const img = document.createElement("img");
    img.src = fileUrl;
    img.style.width = "100%";
    img.style.height = "100%";
    img.alt = "Document Image";
    div.appendChild(img);
  } else if (fileExtension === "pdf") {
    const iframe = document.createElement("iframe");
    iframe.src = fileUrl;
    iframe.style.width = "100%";
    iframe.style.height = "100%";
    iframe.frameBorder = "0";
    div.appendChild(iframe);
  } else if (fileExtension === "docx") {
    const link = document.createElement("a");
    link.href = fileUrl;
    link.textContent = "Click here to download/view the DOCX file";
    link.target = "_blank";
    link.style.display = "block";
    link.style.padding = "10px";
    link.style.textAlign = "center";
    link.style.backgroundColor = "#f0f0f0";
    link.style.borderRadius = "5px";
    div.appendChild(link);
  } else {
    const message = document.createElement("p");
    message.textContent = "Unsupported file format";
    div.appendChild(message);
  }
  const closeButton = document.createElement("button");
  closeButton.textContent = "Close";
  closeButton.style.position = "absolute";
  closeButton.style.top = "10px";
  closeButton.style.right = "10px";
  closeButton.onclick = () => allApplicationContainer.removeChild(div);
  div.appendChild(closeButton);
  allApplicationContainer.appendChild(div);
}

function ShowMarkSheet(fileURl) {
  dialogBox(fileURl);
}

function ShowTc(fileURl) {
  dialogBox(fileURl);
}

function selectUser(admissionId) {
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "allApplications", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
      console.log(xhr.responseText);
    }
  };

  xhr.send("admissionId=" + encodeURIComponent(admissionId));
}
