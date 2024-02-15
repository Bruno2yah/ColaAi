import React, { useState } from 'react';
import { View, Text, TextInput, TouchableOpacity, StyleSheet } from 'react-native';
import { useNavigation } from '@react-navigation/native';
import { MaterialCommunityIcons } from '@expo/vector-icons'; // Importa o ícone do Expo
import * as Animado from 'react-native-animatable';

export default function LoginEmail() {
  const navigation = useNavigation();
  const [showLoginForm, setShowLoginForm] = useState(false);
  const [selectedForm, setSelectedForm] = useState(0);
  const [passwordVisible, setPasswordVisible] = useState(false); // Adiciona estado para controlar a visibilidade da senha
  const [email, setEmail] = useState(''); // Adiciona estado para o email
  const [password, setPassword] = useState(''); // Adiciona estado para a senha

  const handleButtonPress = () => {
    setShowLoginForm(true);
      navigation.navigate('CodigoDeAcessoEmail');

    if (!email.includes('@') || !email.includes('.com')) {
      Alert.alert('Erro', 'Por favor, insira um endereço de e-mail válido.');
      setSelectedForm(1);
    } else {
      setShowLoginForm(false);
    }
  };

  return (
    <View style={styles.container}>
      {showLoginForm && selectedForm === 1 && <CodigoDeAcessoEmail />}
      {!showLoginForm && (
        <Animado.View style={styles.container} >
          <Animado.Text style={styles.title} animation="fadeInRight">Entrar com e-mail</Animado.Text>
          <Animado.Text style={styles.description} animation="slideInRight">Digite dados de login já existentes.</Animado.Text>
          <TextInput
            style={styles.input}
            placeholder="Digite seu e-mail"
            onChangeText={(text) => setEmail(text)}
          />
          <View style={styles.passwordContainer}>
            <TextInput
              style={styles.input}
              placeholder="Digite sua senha"
              secureTextEntry={!passwordVisible} // Oculta ou revela a senha com base no estado
              onChangeText={(text) => setPassword(text)}
              keyboardType="numeric"
            />
            <TouchableOpacity
              style={styles.eyeIcon}
              onPress={() => setPasswordVisible(!passwordVisible)}
            >
              <MaterialCommunityIcons
                name={passwordVisible ? 'eye-off' : 'eye'}
                size={24}
                color="#6D9EAF"
              />
            </TouchableOpacity>
          </View>
          <TouchableOpacity>
            <Text style={styles.esqueci}>esqueci a senha</Text>
          </TouchableOpacity>
          <Animado.View style={styles.buttonColumn} animation="fadeInRight" delay={500}>
            <TouchableOpacity style={styles.button2} onPress={handleButtonPress}>
              <Text style={styles.buttonText2}>Prosseguir</Text>
            </TouchableOpacity>
          </Animado.View>
        </Animado.View>
      )}
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    justifyContent: "center",
    alignItems: "flex-start",
    backgroundColor: "white",
    height: '100%',
    width: '100%',
    padding:10,
    
  },
  title: {
    fontSize: 24,
    fontWeight: "bold",
    marginBottom: 10,
    textAlign: "left",


  },
  description: {
    marginBottom: 20,
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
    fontSize: 16,
    marginBottom: 20,
    width: 300,
    height: 50,
  },
  esqueci:{
    width:300,
    height: 50,
    alignItems:"flex-start", 
    fontSize: 16,
    color: 'blue',
    marginTop: 10,
  },
  passwordContainer: {
    flexDirection: 'row',
    alignItems: 'center',
  },
  passwordInput: {
    flex: 1,
    borderBottomWidth: 1,
    borderBottomColor: '#aaa',
    fontSize: 16,
    marginBottom: 20,
    height: 50,
  },
  eyeIcon: {
    padding: 10,
  },

  });


