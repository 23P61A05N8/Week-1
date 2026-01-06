use std::io; // Import the input/output library

fn main() {
    println!("Welcome to Rust!");
    println!("Please enter your name:");

    // In Rust, variables are immutable by default. 
    // We use 'mut' to make it changeable.
    let mut name = String::new();

    // Read input from the keyboard
    io::stdin()
        .read_line(&mut name)
        .expect("Failed to read line");

    // Print the greeting using "String Interpolation"
    println!("It is an honor to meet you, {}!", name.trim());
}
