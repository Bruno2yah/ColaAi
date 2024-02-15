// LoginTelefone.jsx
import React, { useState } from 'react';
import { View, Text, TextInput, TouchableOpacity, StyleSheet } from 'react-native';
import * as Animado from 'react-native-animatable';

export default function LoginTelefone({ navigation }) {
  const [phoneNumber, setPhoneNumber] = useState('');

  const formatPhoneNumber = (inputNumber) => {
    // Remove non-numeric characters
    const numericValue = inputNumber.replace(/[^\d]/g, '');

    // Apply phone number formatting (e.g., (xxx) xxx-xxxx)
    const formattedNumber = numericValue.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');

    setPhoneNumber(formattedNumber);
  };

  return (
    <View style={styles.container}>
      <View style={styles.container}>
        <Animado.Text style={styles.title} animation="fadeInRight" duration={1500}>Entrar com número de telefone</Animado.Text>
        <Animado.Text style={styles.description} animation="fadeInRight" duration={1500}>
          Digite o seu número de telefone {'\n'}já utilizado em uma conta existente
        </Animado.Text>
        <TextInput
          style={styles.input}
          placeholder="(xx) xxxxx-xxxx"
          keyboardType="numeric"
          value={phoneNumber}
          maxLength={15}
          onChangeText={(text) => formatPhoneNumber(text)}
        />
        <Animado.View style={styles.buttonColumn} animation="fadeInRight" delay={850}>
          <TouchableOpacity style={styles.button2} onPress={() => navigation.navigate('CodigoDeAcessoTelefone')}>
            <Text style={styles.buttonText2}>Prosseguir</Text>
          </TouchableOpacity>
        </Animado.View>
      </View>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: "center",
    alignItems: "flex-start",
    backgroundColor: "white",
    padding: 10,

    
  },
  title: {
    fontSize: 24,
    fontWeight: "bold",
    marginBottom: 10,
    width:"80%",
    textAlign:"left",

  },
  description: {
    marginBottom: 20,
    width:"100%",
    textAlign:"left",
    fontSize: 16,
  },
  buttonText1: {
    fontSize: 22,
    color: '#FABDC1',
    textAlign: 'center',
  },
  button1: {
    backgroundColor: '#6D9EAF',
    padding: 10,
    margin: 10,
    borderRadius: 10,
    width: 300,
    height: 50,
  },
  buttonText2: {
    fontSize: 22,
    color: "#6D9EAF",
    textAlign: "center",
  },
  button2: {
    backgroundColor: "#FABDC1",
    padding: 10,
    margin: 10,
    borderRadius: 10,
    width: 170,
    height: 50,
  },
  buttonColumn: {
    width:330,
    height: 50,
    alignItems:"flex-end"
  },
  inputContainer: {
    width: '90%',
    marginTop: 20,
  },
  label: {
    color: '#666',
    marginTop: 10,
  },
  input: {
    borderBottomWidth: 1,
    borderBottomColor: '#aaa',
    fontSize: 18,
    marginBottom: 20,
    width: 320,
    height: 50,
  },
  esqueci:{
    width:300,
    height: 50,
    alignItems:"flex-start",
  },
  linkText: {
    fontSize: 16,
    color: 'blue',
    marginTop: 10,
  },
  });