const datepicker = document.querySelector(".datepicker");
const dateInput = document.querySelector(".date-input");
const yearInput = datepicker.querySelector(".year-input");
const monthInput = datepicker.querySelector(".month-input");
const cancelBtn = datepicker.querySelector(".cancel");
const applyBtn = datepicker.querySelector(".apply");
const nextBtn = datepicker.querySelector(".next");
const prevBtn = datepicker.querySelector(".prev");
const dates = datepicker.querySelector(".dates");

let selectedDate = new Date();
let year = selectedDate.getFullYear();
let month = selectedDate.getMonth();

// show datepicker
dateInput.addEventListener("click", () => {
  datepicker.hidden = false;
});

// hide datepicker
cancelBtn.addEventListener("click", () => {
  datepicker.hidden = true;
});

// close datepicker on outside click
document.addEventListener("click", (e) => {
  const datepickerContainer = datepicker.parentNode;
  if (!datepickerContainer.contains(e.target)) {
    datepicker.hidden = true;
  }
});

function formatDate(date) {
  const day = String(date.getDate()).padStart(2, "0");
  const month = String(date.getMonth() + 1).padStart(2, "0");
  const year = date.getFullYear();

  return `${day}-${month}-${year}`;
}

// handle apply button click event
applyBtn.addEventListener("click", () => {
  const formatted = formatDate(selectedDate);
  dateInput.value = formatted;
  document.getElementById("inputTanggal").value = formatted;

  datepicker.hidden = true;

  const tanggal = formatted;

  console.log(tanggal);

  // Aktifkan semua slot
  document.querySelectorAll("#paketList div").forEach((p) => {
    p.classList.add(
      "bg-[#0a2008]",
      "hover:bg-[#237219]",
      "hover:cursor-pointer",
      "border"
    );
    p.classList.remove("bg-neutral-700", "text-neutral-800");
    p.style.pointerEvents = "auto";
  });

  // Fetch data untuk tanggal terpilih
  fetch(`controller/cek_slot.php?tanggal=${tanggal}`)
    .then((response) => response.json())
    .then((data) => {
      console.log("Slot dari server:", data);
      data.forEach((slot) => {
        document.querySelectorAll("#paketList div").forEach((p) => {
          if (p.dataset.idPaket == slot.id_paket) {
            p.classList.remove(
              "bg-[#0a2008]",
              "hover:bg-[#237219]",
              "hover:cursor-pointer",
              "border"
            );
            p.classList.add("bg-neutral-700");
            p.style.pointerEvents = "none";
          }
        });
      });
    });
});

// handle next month nav
nextBtn.addEventListener("click", () => {
  if (month === 11) year++;
  month = (month + 1) % 12;
  displayDates();
});

// handle prev month nav
prevBtn.addEventListener("click", () => {
  if (month === 0) year--;
  month = (month - 1 + 12) % 12;
  displayDates();
});

// handle month input change event
monthInput.addEventListener("change", () => {
  month = monthInput.selectedIndex;
  displayDates();
});

// handle year input change event
yearInput.addEventListener("change", () => {
  const newYear = parseInt(yearInput.value, 10) || new Date().getFullYear();
  year = Math.min(2100, Math.max(1900, newYear));
  yearInput.value = year;
  displayDates();
});

const updateYearMonth = () => {
  monthInput.selectedIndex = month;
  yearInput.value = year;
};

const handleDateClick = (e) => {
  const button = e.target;

  // remove the 'selected' class from other buttons
  const selected = dates.querySelector(".selected");
  selected && selected.classList.remove("selected");

  // add the 'selected' class to current button
  button.classList.add("selected");

  // set the selected date
  selectedDate = new Date(year, month, parseInt(button.textContent));
};

// render the dates in the calendar interface
const displayDates = () => {
  // update year & month whenever the dates are updated
  updateYearMonth();

  // clear the dates
  dates.innerHTML = "";

  //* display the last week of previous month

  // get the last date of previous month
  const lastOfPrevMonth = new Date(year, month, 0);

  for (let i = 0; i <= lastOfPrevMonth.getDay(); i++) {
    // if the last day is Saturday don't show the leading dates
    if (lastOfPrevMonth.getDay() === 6) break;

    const text = lastOfPrevMonth.getDate() - lastOfPrevMonth.getDay() + i;
    const button = createButton(text, true);
    dates.appendChild(button);
  }

  //* display the current month

  // get the last date of the month
  const lastOfMonth = new Date(year, month + 1, 0);

  for (let i = 1; i <= lastOfMonth.getDate(); i++) {
    const button = createButton(i, false);
    button.addEventListener("click", handleDateClick);
    dates.appendChild(button);
  }

  //* display the first week of next month

  const firstOfNextMonth = new Date(year, month + 1, 1);

  for (let i = firstOfNextMonth.getDay(); i < 7; i++) {
    // if the first day starts on Sunday don't show the trailing dates
    if (firstOfNextMonth.getDay() === 0) break;

    const text = firstOfNextMonth.getDate() - firstOfNextMonth.getDay() + i;
    const button = createButton(text, true);
    dates.appendChild(button);
  }
};

document
  .getElementById("inputLapangan")
  .addEventListener("change", function () {
    // Simpan id_lapangan baru yang dipilih
    window.id_lapangan = this.value;

    // Ulangi render tanggal
    displayDates();
  });

const createButton = (text, isDisabled = false) => {
  const button = document.createElement("button");
  button.type = "button";
  button.textContent = text;
  button.disabled = isDisabled;
  if (!isDisabled) {
    const buttonDate = new Date(year, month, text).toDateString();
    const today = buttonDate === new Date().toDateString();
    const selected = buttonDate === selectedDate.toDateString();

    button.classList.toggle("today", today);
    button.classList.toggle("selected", selected);

    const now = new Date(year, month, text).toLocaleDateString("en-US", {
      year: "numeric",
      month: "2-digit",
      day: "2-digit",
    });

    fetch(
      `controller/cek_slot_tanggal.php?tanggal=${now}&lapangan=${id_lapangan}`
    )
      .then((response) => response.json())
      .then((data) => {
        if (data.penuh) {
          button.style.background = "red";
          button.style.color = "#fff";
          button.style.pointerEvents = "none";
        }
      });
  }
  return button;
};

displayDates();
