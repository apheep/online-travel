//  SCRIPT PESAWAT
// Date Cards Scrolling Functions
function scrollDateCards(direction) {
    const container = document.getElementById('dateCardsContainer');
    const cardWidth = 140 + 12; // card width + margin
    const visibleCards = Math.floor(container.clientWidth / cardWidth);
    const scrollAmount = cardWidth * Math.max(1, Math.floor(visibleCards / 2));
    
    if (direction === 'left') {
        container.scrollBy({
            left: -scrollAmount,
            behavior: 'smooth'
        });
    } else {
        container.scrollBy({
            left: scrollAmount,
            behavior: 'smooth'
        });
    }
    
    // Update scroll indicators after scrolling
    setTimeout(updateScrollIndicators, 500);
}

// City database for autocomplete
const cities = [
    { name: "Jakarta", code: "CGK", airport: "Soekarno-Hatta" },
    { name: "Surabaya", code: "SUB", airport: "Juanda" },
    { name: "Medan", code: "KNO", airport: "Kualanamu" },
    { name: "Makassar", code: "UPG", airport: "Sultan Hasanuddin" },
    { name: "Palembang", code: "PLM", airport: "Sultan Mahmud Badaruddin II" },
    { name: "Bali", code: "DPS", airport: "Ngurah Rai" },
    { name: "Bandung", code: "BDO", airport: "Husein Sastranegara" },
    { name: "Semarang", code: "SRG", airport: "Ahmad Yani" },
    { name: "Yogyakarta", code: "JOG", airport: "Adisutjipto" },
    { name: "Manado", code: "MDC", airport: "Sam Ratulangi" },
    { name: "Padang", code: "PDG", airport: "Minangkabau" },
    { name: "Balikpapan", code: "BPN", airport: "Sepinggan" },
    { name: "Denpasar", code: "DPS", airport: "Ngurah Rai" },
    { name: "Batam", code: "BTH", airport: "Hang Nadim" },
    { name: "Pekanbaru", code: "PKU", airport: "Sultan Syarif Kasim II" },
    { name: "Pontianak", code: "PNK", airport: "Supadio" },
    { name: "Samarinda", code: "AAP", airport: "Aji Pangeran Tumenggung Pranoto" },
    { name: "Banjarmasin", code: "BDJ", airport: "Syamsudin Noor" },
    { name: "Kupang", code: "KOE", airport: "El Tari" },
    { name: "Jayapura", code: "DJJ", airport: "Sentani" }
];

// Location Modal Functions
function openDepartureModal() {
    const modal = document.getElementById('departureModal');
    const content = document.getElementById('departureModalContent');
    
    modal.classList.remove('hidden');
    
    // Animate modal in
    setTimeout(() => {
        content.classList.remove('scale-95', 'opacity-0');
        content.classList.add('scale-100', 'opacity-100');
    }, 50);
    
    // Set current value to the search input
    document.getElementById('departureSearchInput').value = '';
    
    // Update modal title based on type
    document.getElementById('departureModalTitle').textContent = 'Pilih Lokasi Keberangkatan';
    document.getElementById('departureModalSubtitle').textContent = 'Pilih kota asal Anda';
    
    // Store the current type for later use
    window.currentLocationType = 'departure';
}

function closeDepartureModal() {
    const modal = document.getElementById('departureModal');
    const content = document.getElementById('departureModalContent');
    
    // Animate modal out
    content.classList.remove('scale-100', 'opacity-100');
    content.classList.add('scale-95', 'opacity-0');
    
    // Hide modal after animation
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300);
    
    // Hide suggestions
    document.getElementById('departureSearchResults').classList.add('hidden');
}

function searchDepartureCities() {
    const input = document.getElementById('departureSearchInput');
    const suggestions = document.getElementById('departureSearchResults');
    const query = input.value.toLowerCase().trim();
    
    if (query.length < 2) {
        suggestions.classList.add('hidden');
        return;
    }
    
    const filteredCities = cities.filter(city => 
        city.name.toLowerCase().includes(query) || 
        city.airport.toLowerCase().includes(query)
    );
    
    if (filteredCities.length > 0) {
        suggestions.innerHTML = filteredCities.map(city => `
            <div class="p-3 hover:bg-gray-50 cursor-pointer border-b border-gray-100 last:border-b-0 transition-colors duration-200" 
                 onclick="selectDepartureLocationCity('${city.name}', '${city.code}', '${city.airport}')">
                <div class="flex items-center justify-between">
                    <div>
                        <div class="font-medium text-gray-900">${city.name}</div>
                        <div class="text-sm text-gray-500">${city.airport}</div>
                    </div>
                    <span class="text-xs text-gray-400 bg-gray-100 px-2 py-1 rounded">${city.code}</span>
                </div>
            </div>
        `).join('');
        suggestions.classList.remove('hidden');
    } else {
        suggestions.classList.add('hidden');
    }
}

function selectDepartureLocationCity(cityName, cityCode, airportName) {
    // Update the main location display immediately
    document.getElementById('fromLocation').textContent = cityName;
    
    // Update the input and close suggestions
    document.getElementById('departureSearchInput').value = cityName;
    document.getElementById('departureSearchResults').classList.add('hidden');
    
    // Add to recent searches
    addDepartureRecentSearch(cityName, cityCode);
    
    // Close modal smoothly
    closeDepartureModal();
}

function saveDepartureLocation() {
    const locationInput = document.getElementById('departureSearchInput').value;
    if (locationInput) {
        // Update the departure location (fromLocation)
        document.getElementById('fromLocation').textContent = locationInput;
        // Add to recent searches if not already added
        addDepartureRecentSearch(locationInput, 'CUSTOM');
    }
    closeDepartureModal();
}

// Recent Searches Functions
function addDepartureRecentSearch(cityName, cityCode) {
    const recentSearchesContainer = document.getElementById('departureRecentSearches');
    const existingSearch = Array.from(recentSearchesContainer.children).find(
        (item) => item.textContent.includes(cityName)
    );

    if (existingSearch) {
        recentSearchesContainer.removeChild(existingSearch);
    }

    const newSearchItem = document.createElement('div');
    newSearchItem.classList.add('flex', 'items-center', 'p-3', 'border', 'border-gray-200', 'rounded-lg', 'hover:bg-gray-50', 'cursor-pointer', 'transition', 'duration-200');
    newSearchItem.innerHTML = `
        <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center mr-3">
            <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
            </svg>
        </div>
        <div class="flex-1">
            <div class="text-sm font-medium text-gray-900">${cityName}</div>
            <div class="text-xs text-gray-500">${cityName.split(',')[0]}</div>
        </div>
        <span class="text-xs text-gray-400 bg-gray-100 px-2 py-1 rounded">${cityCode}</span>
    `;
    newSearchItem.onclick = () => selectDepartureRecentLocation(cityName, cityCode);
    recentSearchesContainer.insertBefore(newSearchItem, recentSearchesContainer.firstChild); // Add to the top
}

function selectDepartureRecentLocation(cityName, cityCode) {
    document.getElementById('departureSearchInput').value = cityName;
    document.getElementById('departureSearchResults').classList.add('hidden');
}

function clearDepartureRecentSearches() {
    const recentSearchesContainer = document.getElementById('departureRecentSearches');
    recentSearchesContainer.innerHTML = ''; // Clear all recent searches
}

// Popular Destinations Functions
function selectDeparturePopularLocation(cityName) {
    // Add visual feedback with smooth animation
    const button = event.target;
    button.style.transform = 'scale(0.95)';
    button.style.transition = 'transform 0.15s ease-out';
    
    setTimeout(() => {
        button.style.transform = 'scale(1)';
        
        // Update the main location display
        document.getElementById('fromLocation').textContent = cityName;
        
        // Update the input and close modal with animation
        document.getElementById('departureSearchInput').value = cityName;
        document.getElementById('departureSearchResults').classList.add('hidden');
        addDepartureRecentSearch(cityName, 'POP');
        
        // Auto close modal after selection with smooth animation
        setTimeout(() => {
            closeDepartureModal();
        }, 200);
    }, 150);
}

// Hide suggestions when clicking outside
document.addEventListener('click', function(event) {
    const departureSearchInput = document.getElementById('departureSearchInput');
    const departureSearchResults = document.getElementById('departureSearchResults');
    
    if (!departureSearchInput.contains(event.target) && !departureSearchResults.contains(event.target)) {
        departureSearchResults.classList.add('hidden');
    }
});

function openArrivalModal() {
    const modal = document.getElementById('arrivalModal');
    const content = document.getElementById('arrivalModalContent');
    
    modal.classList.remove('hidden');
    
    // Animate modal in
    setTimeout(() => {
        content.classList.remove('scale-95', 'opacity-0');
        content.classList.add('scale-100', 'opacity-100');
    }, 50);
    
    // Set current value to the search input
    document.getElementById('arrivalSearchInput').value = '';
    
    // Update modal title based on type
    document.getElementById('arrivalModalTitle').textContent = 'Pilih Lokasi Kedatangan';
    document.getElementById('arrivalModalSubtitle').textContent = 'Pilih kota tujuan Anda';
    
    // Store the current type for later use
    window.currentLocationType = 'arrival';
}

function closeArrivalModal() {
    const modal = document.getElementById('arrivalModal');
    const content = document.getElementById('arrivalModalContent');
    
    // Animate modal out
    content.classList.remove('scale-100', 'opacity-100');
    content.classList.add('scale-95', 'opacity-0');
    
    // Hide modal after animation
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300);
    
    // Hide suggestions
    document.getElementById('arrivalSearchResults').classList.add('hidden');
}

function searchArrivalCities() {
    const input = document.getElementById('arrivalSearchInput');
    const suggestions = document.getElementById('arrivalSearchResults');
    const query = input.value.toLowerCase().trim();
    
    if (query.length < 2) {
        suggestions.classList.add('hidden');
        return;
    }
    
    const filteredCities = cities.filter(city => 
        city.name.toLowerCase().includes(query) || 
        city.airport.toLowerCase().includes(query)
    );
    
    if (filteredCities.length > 0) {
        suggestions.innerHTML = filteredCities.map(city => `
            <div class="p-3 hover:bg-gray-50 cursor-pointer border-b border-gray-100 last:border-b-0 transition-colors duration-200" 
                 onclick="selectArrivalLocationCity('${city.name}', '${city.code}', '${city.airport}')">
                <div class="flex items-center justify-between">
                    <div>
                        <div class="font-medium text-gray-900">${city.name}</div>
                        <div class="text-sm text-gray-500">${city.airport}</div>
                    </div>
                    <span class="text-xs text-gray-400 bg-gray-100 px-2 py-1 rounded">${city.code}</span>
                </div>
            </div>
        `).join('');
        suggestions.classList.remove('hidden');
    } else {
        suggestions.classList.add('hidden');
    }
}

function selectArrivalLocationCity(cityName, cityCode, airportName) {
    // Update the main location display immediately
    document.getElementById('toLocation').textContent = cityName;
    
    // Update the input and close suggestions
    document.getElementById('arrivalSearchInput').value = cityName;
    document.getElementById('arrivalSearchResults').classList.add('hidden');
    
    // Add to recent searches
    addArrivalRecentSearch(cityName, cityCode);
    
    // Close modal smoothly
    closeArrivalModal();
}

function saveArrivalLocation() {
    const locationInput = document.getElementById('arrivalSearchInput').value;
    if (locationInput) {
        // Check if departure and arrival are the same
        const currentDeparture = document.getElementById('fromLocation').textContent;
        if (locationInput === currentDeparture) {
            alert('Lokasi keberangkatan dan kedatangan tidak boleh sama!');
            return;
        }
        
        // Update the arrival location (toLocation)
        document.getElementById('toLocation').textContent = locationInput;
        // Add to recent searches if not already added
        addArrivalRecentSearch(locationInput, 'CUSTOM');
    }
    closeArrivalModal();
}

// Recent Searches Functions
function addArrivalRecentSearch(cityName, cityCode) {
    const recentSearchesContainer = document.getElementById('arrivalRecentSearches');
    const existingSearch = Array.from(recentSearchesContainer.children).find(
        (item) => item.textContent.includes(cityName)
    );

    if (existingSearch) {
        recentSearchesContainer.removeChild(existingSearch);
    }

    const newSearchItem = document.createElement('div');
    newSearchItem.classList.add('flex', 'items-center', 'p-3', 'border', 'border-gray-200', 'rounded-lg', 'hover:bg-gray-50', 'cursor-pointer', 'transition', 'duration-200');
    newSearchItem.innerHTML = `
        <div class="w-8 h-8 bg-gray-100 rounded-full flex items-center justify-center mr-3">
            <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
            </svg>
        </div>
        <div class="flex-1">
            <div class="text-sm font-medium text-gray-900">${cityName}</div>
            <div class="text-xs text-gray-500">${cityName.split(',')[0]}</div>
        </div>
        <span class="text-xs text-gray-400 bg-gray-100 px-2 py-1 rounded">${cityCode}</span>
    `;
    newSearchItem.onclick = () => selectArrivalRecentLocation(cityName, cityCode);
    recentSearchesContainer.insertBefore(newSearchItem, recentSearchesContainer.firstChild); // Add to the top
}

function selectArrivalRecentLocation(cityName, cityCode) {
    document.getElementById('arrivalSearchInput').value = cityName;
    document.getElementById('arrivalSearchResults').classList.add('hidden');
}

function clearArrivalRecentSearches() {
    const recentSearchesContainer = document.getElementById('arrivalRecentSearches');
    recentSearchesContainer.innerHTML = ''; // Clear all recent searches
}

// Popular Destinations Functions
function selectArrivalPopularLocation(cityName) {
    // Add visual feedback with smooth animation
    const button = event.target;
    button.style.transform = 'scale(0.95)';
    button.style.transition = 'transform 0.15s ease-out';
    
    setTimeout(() => {
        button.style.transform = 'scale(1)';
        
        // Update the main location display
        document.getElementById('toLocation').textContent = cityName;
        
        // Update the input and close modal with animation
        document.getElementById('arrivalSearchInput').value = cityName;
        document.getElementById('arrivalSearchResults').classList.add('hidden');
        addArrivalRecentSearch(cityName, 'POP');
        
        // Auto close modal after selection with smooth animation
        setTimeout(() => {
            closeArrivalModal();
        }, 200);
    }, 150);
}

// Hide suggestions when clicking outside
document.addEventListener('click', function(event) {
    const arrivalSearchInput = document.getElementById('arrivalSearchInput');
    const arrivalSearchResults = document.getElementById('arrivalSearchResults');
    
    if (!arrivalSearchInput.contains(event.target) && !arrivalSearchResults.contains(event.target)) {
        arrivalSearchResults.classList.add('hidden');
    }
});

// Calendar Functions
let currentDate = new Date();
let tripType = 'oneWay'; // 'oneWay' or 'roundTrip'
let departureDate = null;
let returnDate = null;

function openDateModal() {
    const modal = document.getElementById('dateModal');
    const content = document.getElementById('dateModalContent');
    
    modal.classList.remove('hidden');
    
    // Animate modal in
    setTimeout(() => {
        content.classList.remove('scale-95', 'opacity-0');
        content.classList.add('scale-100', 'opacity-100');
    }, 50);
    
    generateCalendar();
    switchTripType('oneWay'); // Default to one-way
}

function closeDateModal() {
    const modal = document.getElementById('dateModal');
    const content = document.getElementById('dateModalContent');
    
    // Animate modal out
    content.classList.remove('scale-100', 'opacity-100');
    content.classList.add('scale-95', 'opacity-0');
    
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300);
    
    departureDate = null;
    returnDate = null;
}

function switchTripType(type) {
    tripType = type;
    
    // Update button styling with smooth transitions
    const oneWayBtn = document.getElementById('oneWayBtn');
    const roundTripBtn = document.getElementById('roundTripBtn');
    const returnDateSection = document.getElementById('returnDateSection');
    
    // Add transition classes for smooth animation
    oneWayBtn.style.transition = 'all 0.3s ease-out';
    roundTripBtn.style.transition = 'all 0.3s ease-out';
    returnDateSection.style.transition = 'all 0.4s ease-out';
    
    if (type === 'oneWay') {
        oneWayBtn.style.background = 'linear-gradient(135deg, #187499 0%, #36AE7E 100%)';
        oneWayBtn.style.color = 'white';
        oneWayBtn.style.transform = 'scale(1)';
        
        roundTripBtn.style.background = 'white';
        roundTripBtn.style.color = '#374151';
        roundTripBtn.style.transform = 'scale(1)';
        
        // Smooth hide animation for return date section
        returnDateSection.style.opacity = '0';
        returnDateSection.style.transform = 'translateY(-10px)';
        setTimeout(() => {
            returnDateSection.style.display = 'none';
        }, 300);
    } else {
        oneWayBtn.style.background = 'white';
        oneWayBtn.style.color = '#374151';
        oneWayBtn.style.transform = 'scale(1)';
        
        roundTripBtn.style.background = 'linear-gradient(135deg, #187499 0%, #36AE7E 100%)';
        roundTripBtn.style.color = 'white';
        roundTripBtn.style.transform = 'scale(1)';
        
        // Smooth show animation for return date section
        returnDateSection.style.display = 'block';
        setTimeout(() => {
            returnDateSection.style.opacity = '1';
            returnDateSection.style.transform = 'translateY(0)';
        }, 50);
    }
    
    // Reset selections
    departureDate = null;
    returnDate = null;
    document.getElementById('departureDateDisplay').textContent = 'Pilih tanggal keberangkatan';
    document.getElementById('returnDateDisplay').textContent = 'Pilih tanggal pulang';
    generateCalendar();
}

function generateCalendar() {
    const currentMonth = currentDate.getMonth();
    const currentYear = currentDate.getFullYear();
    
    // Update month label
    const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    document.getElementById('currentMonth').textContent = `${monthNames[currentMonth]} ${currentYear}`;
    
    // Generate calendar days
    generateCalendarDays(currentMonth, currentYear);
}

function generateCalendarDays(month, year) {
    const container = document.getElementById('calendarDays');
    const firstDay = new Date(year, month, 1);
    const lastDay = new Date(year, month + 1, 0);
    const startDate = new Date(firstDay);
    startDate.setDate(startDate.getDate() - firstDay.getDay() + 1); // Start from Monday
    
    let html = '';
    
    for (let week = 0; week < 6; week++) {
        for (let day = 0; day < 7; day++) {
            const currentDate = new Date(startDate);
            currentDate.setDate(startDate.getDate() + (week * 7) + day);
            
            const isCurrentMonth = currentDate.getMonth() === month;
            const isToday = currentDate.toDateString() === new Date().toDateString();
            const isDepartureSelected = departureDate && currentDate.toDateString() === departureDate.toDateString();
            const isReturnSelected = returnDate && currentDate.toDateString() === returnDate.toDateString();
            
            let dayClass = 'text-center py-2 text-sm cursor-pointer transition duration-200';
            let dayText = currentDate.getDate();
            
            if (!isCurrentMonth) {
                dayClass += ' text-gray-300';
            } else if (isDepartureSelected || isReturnSelected) {
                dayClass += ' text-white font-semibold';
                dayClass += ' rounded-lg';
                dayClass += ' shadow-md';
                dayClass += ' transition-all duration-200';
                dayClass += ' transform scale-105';
                dayClass += ' bg-gradient-to-r from-[#187499] to-[#36AE7E]';
            } else if (isToday) {
                dayClass += ' text-blue-600 font-semibold';
            } else {
                dayClass += ' text-gray-700 hover:bg-gray-100';
            }
            
            html += `
                <div class="${dayClass}" onclick="selectDate('${currentDate.toISOString()}')">
                    ${dayText}
                </div>
            `;
        }
    }
    
    container.innerHTML = html;
}

function selectDate(dateString) {
    const date = new Date(dateString);
    const isCurrentMonth = date.getMonth() === currentDate.getMonth();
    
    if (!isCurrentMonth) return;
    
    if (tripType === 'oneWay') {
        departureDate = date;
        const formattedDate = date.toLocaleDateString('id-ID', {
            weekday: 'long',
            day: 'numeric',
            month: 'short',
            year: 'numeric'
        });
        document.getElementById('departureDateDisplay').textContent = formattedDate;
    } else {
        if (!departureDate) {
            departureDate = date;
            const formattedDate = date.toLocaleDateString('id-ID', {
                weekday: 'long',
                day: 'numeric',
                month: 'short',
                year: 'numeric'
            });
            document.getElementById('departureDateDisplay').textContent = formattedDate;
        } else if (!returnDate) {
            if (date > departureDate) {
                returnDate = date;
                const formattedDate = date.toLocaleDateString('id-ID', {
                    weekday: 'long',
                    day: 'numeric',
                    month: 'short',
                    year: 'numeric'
                });
                document.getElementById('returnDateDisplay').textContent = formattedDate;
            } else {
                alert('Tanggal pulang tidak boleh sebelum tanggal keberangkatan.');
                return;
            }
        } else {
            alert('Anda sudah memilih tanggal pulang.');
            return;
        }
    }
    
    generateCalendar();
}

function previousMonth() {
    currentDate.setMonth(currentDate.getMonth() - 1);
    generateCalendar();
}

function nextMonth() {
    currentDate.setMonth(currentDate.getMonth() + 1);
    generateCalendar();
}

function saveDate() {
    if (tripType === 'oneWay') {
        if (departureDate) {
            const formattedDate = departureDate.toLocaleDateString('id-ID', {
                weekday: 'long',
                day: 'numeric',
                month: 'short',
                year: 'numeric'
            });
            document.getElementById('selectedDate').textContent = formattedDate;
            document.getElementById('tripType').textContent = '(Sekali jalan)';
        } else {
            alert('Silakan pilih tanggal.');
            return;
        }
    } else {
        if (departureDate && returnDate) {
            const departureFormatted = departureDate.toLocaleDateString('id-ID', {
                weekday: 'long',
                day: 'numeric',
                month: 'short',
                year: 'numeric'
            });
            const returnFormatted = returnDate.toLocaleDateString('id-ID', {
                weekday: 'long',
                day: 'numeric',
                month: 'short',
                year: 'numeric'
            });
            document.getElementById('selectedDate').textContent = `${departureFormatted} - ${returnFormatted}`;
            document.getElementById('tripType').textContent = '(Pulang pergi)';
        } else {
            alert('Silakan pilih tanggal keberangkatan dan pulang.');
            return;
        }
    }
    closeDateModal();
}

// Date Card Selection Function
function selectDateCard(element, date, price) {
    // Remove selected class from all cards
    const allCards = document.querySelectorAll('[onclick*="selectDateCard"]');
    allCards.forEach(card => {
        card.classList.remove('ring-2', 'ring-blue-500', 'border-blue-500');
        card.classList.add('border-gray-200');
    });
    
    // Add selected class to clicked card
    element.classList.remove('border-gray-200');
    element.classList.add('ring-2', 'ring-blue-500', 'border-blue-500');
    
    // Update main search bar date
    document.getElementById('selectedDate').textContent = date;
}

// Toggle Flight Detail
function toggleFlightDetail(flightId) {
    const flightDetail = document.getElementById(flightId);
    flightDetail.classList.toggle('hidden');
}

// Load More Flights Function
function loadMoreFlights() {
    const additionalFlights = document.getElementById('additionalFlights');
    const loadMoreButton = document.querySelector('button[onclick="loadMoreFlights()"]');
    
    if (additionalFlights.classList.contains('hidden')) {
        additionalFlights.classList.remove('hidden');
        loadMoreButton.textContent = 'Show Less Flights';
    } else {
        additionalFlights.classList.add('hidden');
        loadMoreButton.textContent = 'Load More Flights';
    }
}

// Passenger Modal Functions
let passengerCount = 2;

function openPassengerModal() {
    const modal = document.getElementById('passengerModal');
    const content = document.getElementById('passengerModalContent');
    
    modal.classList.remove('hidden');
    
    // Animate modal in
    setTimeout(() => {
        content.classList.remove('scale-95', 'opacity-0');
        content.classList.add('scale-100', 'opacity-100');
    }, 50);
}

function closePassengerModal() {
    const modal = document.getElementById('passengerModal');
    const content = document.getElementById('passengerModalContent');
    
    // Animate modal out
    content.classList.remove('scale-100', 'opacity-100');
    content.classList.add('scale-95', 'opacity-0');
    
    // Hide modal after animation
    setTimeout(() => {
        modal.classList.add('hidden');
    }, 300);
}

function changePassengerCount(change) {
    passengerCount = Math.max(1, Math.min(9, passengerCount + change));
    document.getElementById('passengerCountDisplay').textContent = passengerCount;
}

// Custom Dropdown Functions
function toggleClassDropdown() {
    const dropdown = document.getElementById('classOptions');
    const arrow = document.getElementById('dropdownArrow');
    
    if (dropdown.classList.contains('hidden')) {
        dropdown.classList.remove('hidden');
        dropdown.style.opacity = '0';
        dropdown.style.transform = 'translateY(-10px)';
        
        setTimeout(() => {
            dropdown.style.opacity = '1';
            dropdown.style.transform = 'translateY(0)';
        }, 10);
        
        arrow.style.transform = 'rotate(180deg)';
    } else {
        dropdown.style.opacity = '0';
        dropdown.style.transform = 'translateY(-10px)';
        
        setTimeout(() => {
            dropdown.classList.add('hidden');
        }, 150);
        
        arrow.style.transform = 'rotate(0deg)';
    }
}

function selectClass(className) {
    const selectedElement = document.getElementById('selectedClass');
    const dropdown = document.getElementById('classOptions');
    const arrow = document.getElementById('dropdownArrow');
    
    // Smooth text change
    selectedElement.style.opacity = '0.7';
    
    setTimeout(() => {
        selectedElement.textContent = className;
        selectedElement.style.opacity = '1';
    }, 100);
    
    // Close dropdown with animation
    dropdown.style.opacity = '0';
    dropdown.style.transform = 'translateY(-10px)';
    
    setTimeout(() => {
        dropdown.classList.add('hidden');
    }, 150);
    
    arrow.style.transform = 'rotate(0deg)';
}

// Close dropdown when clicking outside
document.addEventListener('click', function(event) {
    const dropdown = document.getElementById('classDropdown');
    const options = document.getElementById('classOptions');
    
    if (!dropdown.contains(event.target) && !options.contains(event.target)) {
        if (!options.classList.contains('hidden')) {
            options.style.opacity = '0';
            options.style.transform = 'translateY(-10px)';
            
            setTimeout(() => {
                options.classList.add('hidden');
            }, 150);
            
            document.getElementById('dropdownArrow').style.transform = 'rotate(0deg)';
        }
    }
});

function savePassenger() {
    const passengerClass = document.getElementById('selectedClass').textContent;
    
    document.getElementById('passengerCount').textContent = passengerCount + ' Penumpang';
    document.getElementById('passengerClass').textContent = '(' + passengerClass + ')';
    
    closePassengerModal();
}

// Close modals when clicking outside
window.onclick = function(event) {
    const departureModal = document.getElementById('departureModal');
    const arrivalModal = document.getElementById('arrivalModal');
    const dateModal = document.getElementById('dateModal');
    const passengerModal = document.getElementById('passengerModal');
    
    if (event.target === departureModal) {
        closeDepartureModal();
    }
    if (event.target === arrivalModal) {
        closeArrivalModal();
    }
    if (event.target === dateModal) {
        closeDateModal();
    }
    if (event.target === passengerModal) {
        closePassengerModal();
    }
}

// Hide suggestions when clicking outside
document.addEventListener('click', function(event) {
    const departureSearchInput = document.getElementById('departureSearchInput');
    const departureSearchResults = document.getElementById('departureSearchResults');
    const arrivalSearchInput = document.getElementById('arrivalSearchInput');
    const arrivalSearchResults = document.getElementById('arrivalSearchResults');
    
    if (!departureSearchInput.contains(event.target) && !departureSearchResults.contains(event.target)) {
        departureSearchResults.classList.add('hidden');
    }
    if (!arrivalSearchInput.contains(event.target) && !arrivalSearchResults.contains(event.target)) {
        arrivalSearchResults.classList.add('hidden');
    }
});

// Reverse Locations Function
function reverseLocations() {
    const fromLocation = document.getElementById('fromLocation').textContent;
    const toLocation = document.getElementById('toLocation').textContent;
    document.getElementById('fromLocation').textContent = toLocation;
    document.getElementById('toLocation').textContent = fromLocation;

    const fromInput = document.getElementById('departureSearchInput');
    const toInput = document.getElementById('arrivalSearchInput');
    const temp = fromInput.value;
    fromInput.value = toInput.value;
    toInput.value = temp;

    // Update suggestions based on new values
    searchDepartureCities(); // Re-search for new departure
    searchArrivalCities(); // Re-search for new arrival
}

function searchFlights() {
    // Get search criteria from the flight search bar
    const fromLocation = document.getElementById('fromLocation').textContent;
    const toLocation = document.getElementById('toLocation').textContent;
    const selectedDate = document.getElementById('selectedDate').textContent;
    const tripType = document.getElementById('tripType').textContent;
    const passengerCount = document.getElementById('passengerCount').textContent;
    const passengerClass = document.getElementById('passengerClass').textContent;
    
    // Show loading state
    const searchButton = document.querySelector('button[onclick="searchFlights()"]');
    const originalText = searchButton.innerHTML;
    searchButton.innerHTML = '<span class="flex items-center justify-center space-x-2"><svg class="w-4 h-4 animate-spin" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"></path></svg><span>Mencari...</span></span>';
    searchButton.disabled = true;
    
    // Prepare data for controller
    const searchData = {
        from_location: fromLocation,
        to_location: toLocation,
        departure_date: selectedDate,
        trip_type: tripType,
        passenger_count: passengerCount,
        passenger_class: passengerClass,
        _token: document.querySelector('meta[name="csrf-token"]').getAttribute('content')
    };
    
    // Send AJAX request to controller
    fetch('/search-flights', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(searchData)
    })
    .then(response => response.json())
    .then(data => {
        // Handle successful response
        if (data.success) {
            displaySearchResults(data.flights, searchData);
        } else {
            // Show error message
            showSearchError(data.message || 'Terjadi kesalahan dalam pencarian');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        // Fallback to client-side search if server is not available
        performClientSideSearch(searchData);
    })
    .finally(() => {
        // Restore search button
        searchButton.innerHTML = originalText;
        searchButton.disabled = false;
    });
}

function displaySearchResults(flights, searchCriteria) {
    // Remove existing results summary
    const existingSummary = document.querySelector('.search-results-popup');
    if (existingSummary) {
        existingSummary.remove();
    }
    
    // Create search results popup in bottom right
    const resultsPopup = document.createElement('div');
    resultsPopup.className = 'search-results-popup fixed bottom-6 right-6 bg-white border border-gray-200 rounded-lg p-4 shadow-lg z-50 max-w-sm w-full sm:w-96 transform translate-y-full opacity-0 transition-all duration-500 ease-out';
    resultsPopup.innerHTML = `
        <div class="flex items-start justify-between mb-3">
            <div class="flex-1">
                <h3 class="text-lg font-semibold text-gray-900">Hasil Pencarian</h3>
                <p class="text-sm text-gray-700">Ditemukan ${flights.length} penerbangan dari ${searchCriteria.from_location} ke ${searchCriteria.to_location}</p>
                <p class="text-xs text-gray-600 mt-1">Tanggal: ${searchCriteria.departure_date} | ${searchCriteria.trip_type} | ${searchCriteria.passenger_count} ${searchCriteria.passenger_class}</p>
            </div>
            <button onclick="closeSearchResults()" class="text-gray-500 hover:text-gray-700 ml-3 p-1 hover:bg-gray-100 rounded-full transition duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div class="flex items-center justify-between">
            <div class="text-xs text-gray-500">Popup akan hilang otomatis dalam 8 detik</div>
            <div class="w-16 bg-gray-200 rounded-full h-2">
                <div class="bg-gradient-to-r from-gray-500 to-gray-600 h-2 rounded-full transition-all duration-100" id="timeoutBar"></div>
            </div>
        </div>
    `;
    
    // Add popup to body
    document.body.appendChild(resultsPopup);
    
    // Animate popup in
    setTimeout(() => {
        resultsPopup.classList.remove('translate-y-full', 'opacity-0');
        resultsPopup.classList.add('translate-y-0', 'opacity-100');
    }, 100);
    
    // Update flight cards based on search results
    updateFlightCards(flights);
    
    // Start timeout countdown
    startTimeoutCountdown(8);
    
    // Auto close after 8 seconds
    setTimeout(() => {
        closeSearchResults();
    }, 8000);
}

function performClientSideSearch(searchData) {
    // Fallback client-side search
    const flightCards = document.querySelectorAll('.bg-white.rounded-xl');
    let foundFlights = 0;
    
    flightCards.forEach((card, index) => {
        // Simple filtering logic (you can expand this)
        if (searchData.from_location && searchData.to_location) {
            // Show all flights for now (in real app, filter by route)
            card.style.display = 'block';
            foundFlights++;
        } else {
            card.style.display = 'none';
        }
    });
    
    // Create search results popup in bottom right
    const resultsPopup = document.createElement('div');
    resultsPopup.className = 'search-results-popup fixed bottom-6 right-6 bg-white border border-gray-200 rounded-lg p-4 shadow-lg z-50 max-w-sm w-full sm:w-96 transform translate-y-full opacity-0 transition-all duration-500 ease-out';
    resultsPopup.innerHTML = `
        <div class="flex items-start justify-between mb-3">
            <div class="flex-1">
                <h3 class="text-lg font-semibold text-gray-900">Hasil Pencarian</h3>
                <p class="text-sm text-gray-700">Ditemukan ${foundFlights} penerbangan dari ${searchData.from_location} ke ${searchData.to_location}</p>
                <p class="text-xs text-gray-600 mt-1">Tanggal: ${searchData.departure_date} | ${searchData.trip_type} | ${searchData.passenger_count} ${searchData.passenger_class}</p>
            </div>
            <button onclick="closeSearchResults()" class="text-gray-500 hover:text-gray-700 ml-3 p-1 hover:bg-gray-100 rounded-full transition duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div class="flex items-center justify-between">
            <div class="w-16 bg-gray-200 rounded-full h-2">
                <div class="bg-gradient-to-r from-gray-500 to-gray-600 h-2 rounded-full transition-all duration-100" id="timeoutBar"></div>
            </div>
        </div>
    `;
    
    // Add popup to body
    document.body.appendChild(resultsPopup);
    
    // Animate popup in
    setTimeout(() => {
        resultsPopup.classList.remove('translate-y-full', 'opacity-0');
        resultsPopup.classList.add('translate-y-0', 'opacity-100');
    }, 100);
    
    // Start timeout countdown
    startTimeoutCountdown(8);
    
    // Auto close after 8 seconds
    setTimeout(() => {
        closeSearchResults();
    }, 8000);
}

function showSearchError(message) {
    // Create error popup in bottom right
    const errorPopup = document.createElement('div');
    errorPopup.className = 'search-results-popup fixed bottom-6 right-6 bg-red-50 border border-red-200 rounded-lg p-4 shadow-lg z-50 max-w-sm w-full sm:w-96 transform translate-y-full opacity-0 transition-all duration-500 ease-out';
    errorPopup.innerHTML = `
        <div class="flex items-start justify-between mb-3">
            <div class="flex-1">
                <h3 class="text-lg font-semibold text-red-900">Error Pencarian</h3>
                <p class="text-sm text-red-700">${message}</p>
            </div>
            <button onclick="closeSearchResults()" class="text-red-500 hover:text-red-700 ml-3 p-1 hover:bg-red-100 rounded-full transition duration-200">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div class="flex items-center justify-between">
            <div class="text-xs text-red-500">Popup akan hilang otomatis dalam 8 detik</div>
            <div class="w-16 bg-red-200 rounded-full h-2">
                <div class="bg-red-500 h-2 rounded-full transition-all duration-100" id="timeoutBar"></div>
            </div>
        </div>
    `;
    
    // Add popup to body
    document.body.appendChild(errorPopup);
    
    // Animate popup in
    setTimeout(() => {
        errorPopup.classList.remove('translate-y-full', 'opacity-0');
        errorPopup.classList.add('translate-y-0', 'opacity-100');
    }, 100);
    
    // Start timeout countdown
    startTimeoutCountdown(8);
    
    // Auto close after 8 seconds
    setTimeout(() => {
        closeSearchResults();
    }, 8000);
}

function closeSearchResults() {
    const popup = document.querySelector('.search-results-popup');
    if (popup) {
        popup.classList.add('translate-y-full', 'opacity-0');
        setTimeout(() => {
            popup.remove();
        }, 500);
    }
}

function startTimeoutCountdown(seconds) {
    const timeoutBar = document.getElementById('timeoutBar');
    if (timeoutBar) {
        const totalWidth = 64; // w-16 = 64px
        const interval = setInterval(() => {
            seconds--;
            const progress = (seconds / 8) * totalWidth;
            timeoutBar.style.width = `${progress}px`;
            
            if (seconds <= 0) {
                clearInterval(interval);
            }
        }, 1000);
    }
}

function updateFlightCards(flights) {
    // This function can be used to dynamically update flight cards based on search results
    // For now, we'll just show all existing cards
    console.log('Updating flight cards with:', flights);
}

// Add responsive CSS for mobile devices
function addResponsiveStyles() {
    const style = document.createElement('style');
    style.textContent = `
        /* Hide scrollbar for webkit browsers */
        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
        
        /* Hide scrollbar for Firefox */
        .scrollbar-hide {
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
        
        /* Date cards responsive improvements */
        @media (max-width: 768px) {
            .date-cards-container {
                padding: 0 1rem;
            }
            
            /* Hide arrows on mobile */
            .date-cards-container button {
                display: none;
            }
            
            /* Improve touch scrolling on mobile */
            #dateCardsContainer {
                scroll-snap-type: x mandatory;
                -webkit-overflow-scrolling: touch;
            }
            
            #dateCardsContainer > div {
                scroll-snap-align: start;
            }
        }
        
        @media (max-width: 640px) {
            .search-results-popup {
                bottom: 1rem;
                right: 1rem;
                left: 1rem;
                max-width: none;
                width: calc(100% - 2rem);
            }
            
            .search-results-popup .text-lg {
                font-size: 1rem;
            }
            
            .search-results-popup .text-sm {
                font-size: 0.875rem;
            }
            
            .search-results-popup .text-xs {
                font-size: 0.75rem;
            }
            
            .date-cards-container button {
                transform: scale(0.8);
            }
            
            .date-cards-container button.-ml-4 {
                margin-left: -0.25rem;
            }
            
            .date-cards-container button.-mr-4 {
                margin-right: -0.25rem;
            }
        }
        
        @media (max-width: 480px) {
            .search-results-popup {
                padding: 0.75rem;
            }
            
            .search-results-popup .text-lg {
                font-size: 0.875rem;
            }
            
            .date-cards-container {
                padding: 0 0.5rem;
            }
            
            .date-cards-container button {
                transform: scale(0.7);
            }
            
            .date-cards-container button.-ml-4 {
                margin-left: 0;
            }
            
            .date-cards-container button.-mr-4 {
                margin-right: 0;
            }
            
            #dateCardsContainer {
                padding: 0 1rem;
            }
            
            #dateCardsContainer .min-w-\\[140px\\] {
                min-width: 120px;
            }
        }
        
        /* Responsive improvements for existing components */
        @media (max-width: 768px) {
            .flight-search-container {
                padding: 1rem;
            }
            
            .flight-search-container .grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }
            
            .flight-search-container .sm\\:ml-auto {
                margin-left: 0;
                margin-top: 1rem;
            }
        }
        
        @media (max-width: 640px) {
            .flight-card {
                padding: 1rem;
            }
            
            .flight-card .lg\\:flex-row {
                flex-direction: column;
            }
            
            .flight-card .lg\\:w-48 {
                width: 100%;
            }
            
            .flight-card .lg\\:w-64 {
                width: 100%;
            }
            
            .flight-card .lg\\:text-right {
                text-align: center;
            }
        }
        
        @media (max-width: 480px) {
            .flight-search-container {
                padding: 0.75rem;
            }
            
            .flight-card {
                padding: 0.75rem;
            }
            
            .date-cards-container {
                padding: 0.75rem;
            }
            
            .date-cards-container .grid {
                grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
                gap: 0.5rem;
            }
        }
        
        /* Smooth scrolling for date cards */
        #dateCardsContainer {
            scroll-behavior: smooth;
            cursor: grab;
            -webkit-overflow-scrolling: touch;
            scroll-snap-type: x proximity;
        }
        
        #dateCardsContainer:active {
            cursor: grabbing;
        }
        
        #dateCardsContainer > div {
            scroll-snap-align: start;
        }
        
        /* Arrow button - minimal hover effect */
        .date-cards-container button {
            transition: background-color 0.15s ease;
        }
        
        /* Scroll indicators animation */
        .scroll-indicator {
            transition: all 0.3s ease;
            cursor: pointer;
        }
        
        .scroll-indicator.active {
            transform: scale(1.2);
            background-color: #4B5563;
        }
        
        .scroll-indicator:hover {
            background-color: #6B7280;
        }
    `;
    document.head.appendChild(style);
}

// Scroll to specific indicator
function scrollToIndicator(index) {
    const container = document.getElementById('dateCardsContainer');
    const cardWidth = 140 + 12; // card width + margin
    const visibleCards = Math.floor(container.clientWidth / cardWidth);
    const scrollAmount = cardWidth * visibleCards * index;
    
    container.scrollTo({
        left: scrollAmount,
        behavior: 'smooth'
    });
    
    // Update scroll indicators after scrolling
    setTimeout(updateScrollIndicators, 500);
}

// Update scroll indicators
function updateScrollIndicators() {
    const container = document.getElementById('dateCardsContainer');
    const indicators = document.querySelectorAll('.scroll-indicator');
    
    if (!container || indicators.length === 0) return;
    
    const scrollPosition = container.scrollLeft;
    const maxScroll = container.scrollWidth - container.clientWidth;
    const scrollPercentage = scrollPosition / maxScroll;
    
    // Calculate which indicator should be active
    const activeIndex = Math.round(scrollPercentage * (indicators.length - 1));
    
    indicators.forEach((indicator, index) => {
        if (index === activeIndex) {
            indicator.classList.add('active');
            indicator.classList.remove('bg-gray-300');
            indicator.classList.add('bg-gray-600');
        } else {
            indicator.classList.remove('active');
            indicator.classList.remove('bg-gray-600');
            indicator.classList.add('bg-gray-300');
        }
    });
}

// Touch/Swipe functionality for mobile
let isScrolling = false;
let startX = 0;
let scrollLeft = 0;

function initTouchScrolling() {
    const container = document.getElementById('dateCardsContainer');
    if (!container) return;
    
    // Touch events
    container.addEventListener('touchstart', handleTouchStart, { passive: true });
    container.addEventListener('touchmove', handleTouchMove, { passive: true });
    container.addEventListener('touchend', handleTouchEnd, { passive: true });
    
    // Mouse events for desktop
    container.addEventListener('mousedown', handleMouseDown);
    container.addEventListener('mousemove', handleMouseMove);
    container.addEventListener('mouseup', handleMouseUp);
    container.addEventListener('mouseleave', handleMouseUp);
    
    // Scroll event for indicators
    container.addEventListener('scroll', updateScrollIndicators);
}

function handleTouchStart(e) {
    const container = document.getElementById('dateCardsContainer');
    startX = e.touches[0].pageX - container.offsetLeft;
    scrollLeft = container.scrollLeft;
}

function handleTouchMove(e) {
    if (!startX) return;
    
    const container = document.getElementById('dateCardsContainer');
    const x = e.touches[0].pageX - container.offsetLeft;
    const walk = (x - startX) * 2;
    container.scrollLeft = scrollLeft - walk;
}

function handleTouchEnd() {
    startX = 0;
}

function handleMouseDown(e) {
    const container = document.getElementById('dateCardsContainer');
    isScrolling = true;
    startX = e.pageX - container.offsetLeft;
    scrollLeft = container.scrollLeft;
    container.style.cursor = 'grabbing';
}

function handleMouseMove(e) {
    if (!isScrolling) return;
    
    const container = document.getElementById('dateCardsContainer');
    e.preventDefault();
    const x = e.pageX - container.offsetLeft;
    const walk = (x - startX) * 2;
    container.scrollLeft = scrollLeft - walk;
}

function handleMouseUp() {
    const container = document.getElementById('dateCardsContainer');
    isScrolling = false;
    container.style.cursor = 'grab';
}

// Flight Detail Toggle Function
function toggleFlightDetail(flightId) {
    const detailElement = document.getElementById(flightId);
    
    if (detailElement.classList.contains('hidden')) {
        // Show with smooth animation
        detailElement.classList.remove('hidden');
        detailElement.style.maxHeight = '0px';
        detailElement.style.opacity = '0';
        detailElement.style.transform = 'translateY(-10px)';
        detailElement.style.transition = 'all 0.3s ease-out';
        
        // Force reflow
        detailElement.offsetHeight;
        
        // Animate to full height
        detailElement.style.maxHeight = '500px';
        detailElement.style.opacity = '1';
        detailElement.style.transform = 'translateY(0)';
    } else {
        // Hide with smooth animation
        detailElement.style.maxHeight = detailElement.scrollHeight + 'px';
        detailElement.style.opacity = '1';
        detailElement.style.transform = 'translateY(0)';
        detailElement.style.transition = 'all 0.3s ease-out';
        
        // Force reflow
        detailElement.offsetHeight;
        
        // Animate to hidden
        detailElement.style.maxHeight = '0px';
        detailElement.style.opacity = '0';
        detailElement.style.transform = 'translateY(-10px)';
        
        // Hide after animation
        setTimeout(() => {
            detailElement.classList.add('hidden');
        }, 300);
    }
}

// Initialize responsive styles when page loads
document.addEventListener('DOMContentLoaded', function() {
    addResponsiveStyles();
    initTouchScrolling();
});

