# Travel-Website-DBS-project
databases required:
sign up:
  I. google/ apple verification
  II. email verification:
    1. First Name
    2. Last Name
    3. Phone number -> otp
    4. Email Id
    5. password
    6. terms and conditions check

sign in:
I. google/ apple verification
II. Phone/Email verification:
  1. phone:
     a. number -> otp
  2. email:
     a. email (check if email is in the database) if yes ask Password else say "user not found please sign up"
     b. password (check if the password is in the database) if yes go to the main/ landing page else say "Invalid password Try Again" // additional feature: counter for maximum trials
     
Route:
  1. source
  2. destination
  3. mode of travel
  4. date of travel

Accommodations Database: This database stores information about the various accommodations available for booking on the travel website, including:
  1. Hotel name
  2. Location (city, country)
  3. Star rating
  4. Room types (descriptions, prices, amenities)
  5. Images
  6. Guest reviews
  7. Amenities (pool, spa, Wi-Fi)
  8. Room rates

Transportation Database: This database stores information about how to get to a destination, including:
  1. Flights
  2. Trains
  3. Buses
  4. Cruises
  5. Car rentals
  6. Schedules
  7. Prices

Flights Database: This database stores information about the various flights available for booking on the travel website, including:
  1. Airline
  2. Departure and arrival airports
  3. Departure and arrival times
  4. Flight duration
  5. Price
  6. Layovers
  7. Cabin class (economy, business, first)

Trains Database: This database stores information about the various trains available for booking on the travel website, including:
  1. Train type 
  2. Departure and arrival stations
  3. Departure and arrival times
  4. train duration
  5. Price
  6. Cabin class 

Booking database:
  1. BookingID (primary key)
  2. CustomerID (foreign key referencing customer table made in signup)
  3. PackageID (foreign key referencing tourPackage table) (if selected a package)(optional)
  4. BookingDate
  5. TravelDate
  6. TotalCost
  7. mode of travel
  8. PaymentStatus (e.g., pending, paid) 

