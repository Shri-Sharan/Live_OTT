from flask import Flask, render_template, request
import openpyxl
import uuid

app = Flask(__name__)

# Function to generate a unique ticket ID
def generate_ticket_id():
    return str(uuid.uuid4())

# Function to store form data in an Excel file
def store_data_in_excel(name, email, phone, movie, timing, payment):
    # Generate a unique ticket ID
    ticket_id = generate_ticket_id()

    # Load existing Excel file or create a new one
    try:
        workbook = openpyxl.load_workbook('ticket_data.xlsx')
    except FileNotFoundError:
        workbook = openpyxl.Workbook()
        sheet = workbook.active
        sheet.append(["Ticket ID", "Name", "Email", "Phone", "Movie", "Timing", "Payment"])

    sheet = workbook.active
    sheet.append([ticket_id, name, email, phone, movie, timing, payment])

    workbook.save('ticket_data.xlsx')

    return ticket_id

# Define the route for booking tickets
@app.route('/book_tickets', methods=['POST'])
def book_tickets():
    ticket_id = None  # Initialize ticket_id

    if request.method == 'POST':
        name = request.form['name']
        email = request.form['email']
        phone = request.form['phone']
        movie = request.form['movie']
        timing = request.form['timing']
        payment = request.form['payment']

        ticket_id = store_data_in_excel(name, email, phone, movie, timing, payment)

    return render_template('booking.html', ticket_id=ticket_id)

if __name__ == '__main__':
    app.run()
