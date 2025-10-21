// Dashboard JavaScript
document.addEventListener('DOMContentLoaded', function() {
    
    // Theme Toggle Functionality
    const themeToggle = document.getElementById('themeToggle');
    const themeIcon = document.getElementById('themeIcon');
    const body = document.body;
    
    // Load saved theme or default to light
    const savedTheme = localStorage.getItem('theme') || 'light';
    setTheme(savedTheme);
    
    themeToggle.addEventListener('click', function() {
        const currentTheme = body.classList.contains('dark-mode') ? 'dark' : 'light';
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        setTheme(newTheme);
        localStorage.setItem('theme', newTheme);
    });
    
    function setTheme(theme) {
        if (theme === 'dark') {
            body.classList.remove('light-mode');
            body.classList.add('dark-mode');
            themeIcon.className = 'bi bi-moon-fill';
            document.documentElement.setAttribute('data-theme', 'dark');
        } else {
            body.classList.remove('dark-mode');
            body.classList.add('light-mode');
            themeIcon.className = 'bi bi-sun-fill';
            document.documentElement.setAttribute('data-theme', 'light');
        }
    }
    
    // Sidebar Toggle for Mobile
    const sidebarToggle = document.getElementById('sidebarToggle');
    const sidebar = document.getElementById('sidebar');
    
    sidebarToggle.addEventListener('click', function() {
        sidebar.classList.toggle('show');
    });
    
    // Page Navigation
    const navLinks = document.querySelectorAll('.nav-link[data-page]');
    const pages = document.querySelectorAll('.page');
    
    navLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remove active class from all nav links
            navLinks.forEach(nl => nl.classList.remove('active'));
            
            // Add active class to clicked link
            this.classList.add('active');
            
            // Hide all pages
            pages.forEach(page => {
                page.classList.remove('active');
                page.classList.add('d-none');
            });
            
            // Show selected page
            const pageId = this.getAttribute('data-page') + '-page';
            const targetPage = document.getElementById(pageId);
            if (targetPage) {
                targetPage.classList.remove('d-none');
                targetPage.classList.add('active');
            }
            
            // Close sidebar on mobile after navigation
            if (window.innerWidth < 768) {
                sidebar.classList.remove('show');
            }
        });
    });
    
    // Initialize Charts
    initializeCharts();
    
    // Initialize additional charts when needed
    initializeReportsCharts();
    
    // Auto-refresh data every 30 seconds
    setInterval(refreshDashboardData, 30000);
});

// Chart Initialization
function initializeCharts() {
    // Sales Chart
    const salesCtx = document.getElementById('salesChart');
    if (salesCtx) {
        new Chart(salesCtx, {
            type: 'line',
            data: {
                labels: ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور'],
                datasets: [{
                    label: 'فروش (میلیون تومان)',
                    data: [12, 19, 15, 25, 22, 30],
                    borderColor: 'rgb(75, 192, 192)',
                    backgroundColor: 'rgba(75, 192, 192, 0.1)',
                    tension: 0.4,
                    fill: true
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        labels: {
                            font: {
                                family: 'Vazir'
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            font: {
                                family: 'Vazir'
                            }
                        }
                    },
                    x: {
                        ticks: {
                            font: {
                                family: 'Vazir'
                            }
                        }
                    }
                }
            }
        });
    }
    
    // Top Drugs Chart
    const topDrugsCtx = document.getElementById('topDrugsChart');
    if (topDrugsCtx) {
        new Chart(topDrugsCtx, {
            type: 'doughnut',
            data: {
                labels: ['پاراستامول', 'ایبوپروفن', 'آسپرین', 'آموکسی سیلین', 'سایر'],
                datasets: [{
                    data: [30, 25, 20, 15, 10],
                    backgroundColor: [
                        '#4e73df',
                        '#1cc88a',
                        '#36b9cc',
                        '#f6c23e',
                        '#e74a3b'
                    ],
                    hoverBackgroundColor: [
                        '#2e59d9',
                        '#17a673',
                        '#2c9faf',
                        '#f4b619',
                        '#e02d1b'
                    ]
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            font: {
                                family: 'Vazir'
                            },
                            padding: 20
                        }
                    }
                }
            }
        });
    }
}

// Refresh Dashboard Data
function refreshDashboardData() {
    // Simulate API calls to refresh data
    console.log('Refreshing dashboard data...');
    
    // Update statistics (simulate)
    updateStatistics();
    
    // Update recent activities (simulate)
    updateRecentActivities();
}

// Update Statistics
function updateStatistics() {
    // Simulate random data updates
    const totalInventory = document.querySelector('.card:nth-child(1) .h5');
    const todaySales = document.querySelector('.card:nth-child(2) .h5');
    const pendingOrders = document.querySelector('.card:nth-child(3) .h5');
    const nearExpiry = document.querySelector('.card:nth-child(4) .h5');
    
    if (totalInventory) {
        const currentValue = parseInt(totalInventory.textContent.replace(',', ''));
        const newValue = currentValue + Math.floor(Math.random() * 10) - 5;
        totalInventory.textContent = newValue.toLocaleString('fa-IR');
    }
    
    if (todaySales) {
        const randomIncrease = Math.floor(Math.random() * 100000);
        const newValue = 1250000 + randomIncrease;
        todaySales.textContent = newValue.toLocaleString('fa-IR') + ' تومان';
    }
}

// Update Recent Activities
function updateRecentActivities() {
    const activities = [
        { icon: 'bi-arrow-down-circle', text: 'ورود 50 عدد سیترازین', time: 'الان', color: 'success' },
        { icon: 'bi-arrow-up-circle', text: 'خروج 30 عدد فولیک اسید', time: '2 دقیقه پیش', color: 'danger' },
        { icon: 'bi-cart-plus', text: 'سفارش جدید از داروپخش رازی', time: '10 دقیقه پیش', color: 'info' },
        { icon: 'bi-exclamation-triangle', text: 'هشدار موجودی کم - ویتامین سی', time: '15 دقیقه پیش', color: 'warning' }
    ];
    
    const activityList = document.querySelector('.card .list-group');
    if (activityList) {
        // Clear existing activities
        activityList.innerHTML = '';
        
        // Add new activities
        activities.slice(0, 3).forEach(activity => {
            const listItem = document.createElement('div');
            listItem.className = 'list-group-item d-flex justify-content-between align-items-center';
            listItem.innerHTML = `
                <div>
                    <i class="${activity.icon} text-${activity.color} me-2"></i>
                    ${activity.text}
                </div>
                <small class="text-muted">${activity.time}</small>
            `;
            activityList.appendChild(listItem);
        });
    }
}

// Utility Functions
function showNotification(message, type = 'info') {
    // Create notification element
    const notification = document.createElement('div');
    notification.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
    notification.style.cssText = 'top: 80px; left: 20px; z-index: 9999; min-width: 300px;';
    notification.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    `;
    
    document.body.appendChild(notification);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        if (notification.parentNode) {
            notification.parentNode.removeChild(notification);
        }
    }, 5000);
}

// Search functionality
function performSearch(query) {
    console.log('Searching for:', query);
    // Implement search logic here
}

// Initialize Reports Charts
function initializeReportsCharts() {
    // Monthly Sales Chart
    const monthlySalesCtx = document.getElementById('monthlySalesChart');
    if (monthlySalesCtx) {
        new Chart(monthlySalesCtx, {
            type: 'bar',
            data: {
                labels: ['فروردین', 'اردیبهشت', 'خرداد', 'تیر', 'مرداد', 'شهریور'],
                datasets: [{
                    label: 'فروش (میلیون تومان)',
                    data: [45, 52, 38, 61, 55, 67],
                    backgroundColor: 'rgba(78, 115, 223, 0.8)',
                    borderColor: 'rgba(78, 115, 223, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        labels: {
                            font: {
                                family: 'Vazir'
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            font: {
                                family: 'Vazir'
                            }
                        }
                    },
                    x: {
                        ticks: {
                            font: {
                                family: 'Vazir'
                            }
                        }
                    }
                }
            }
        });
    }
    
    // Top Selling Chart
    const topSellingCtx = document.getElementById('topSellingChart');
    if (topSellingCtx) {
        new Chart(topSellingCtx, {
            type: 'doughnut',
            data: {
                labels: ['پاراستامول', 'ایبوپروفن', 'آسپرین', 'آموکسی سیلین', 'ویتامین C'],
                datasets: [{
                    data: [35, 25, 20, 15, 5],
                    backgroundColor: [
                        '#4e73df',
                        '#1cc88a',
                        '#36b9cc',
                        '#f6c23e',
                        '#e74a3b'
                    ]
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'bottom',
                        labels: {
                            font: {
                                family: 'Vazir'
                            }
                        }
                    }
                }
            }
        });
    }
}

// Export functions for use in other modules
window.PharmacyDashboard = {
    showNotification,
    performSearch,
    refreshDashboardData,
    initializeReportsCharts
};
