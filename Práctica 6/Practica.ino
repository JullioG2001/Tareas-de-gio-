void setup() {
  Serial.begin(9600);

}

void loop(){
  Serial.print("DATA: ");
  Serial.println(analogRead(A0));
  delay(3000);
  }
