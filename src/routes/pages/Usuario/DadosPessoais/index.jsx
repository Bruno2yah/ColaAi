import { View, Text, Pressable, Image, TextInput,} from 'react-native';
import React, {useState} from 'react';
import styles from '../../../../Components/Styles/DadosPessoais/DadosPessoaisStyle';

export default function Feedback({ navigation }) {
    const [senhaVisivel, setSenhaVisivel] = useState(true);

    const SenhaVisivel = async () => {
        if(senhaVisivel == false)
        {
            setSenhaVisivel(true);
        }
        else
        {
            setSenhaVisivel(false);
        }
    };

  return (
      <View style={styles.container}>
        <View style={{ position: 'absolute', width: '100%', height: '100%'}}>
          <View style={{ justifyContent: 'flex-start' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 50, width: 45 }}
                source={require('../../../../../assets/img/DadosPessoais/superiorDireito.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 95, width: 38, marginTop: 100}}
                source={require('../../../../../assets/img/DadosPessoais/direito.png')}
              />
            </View>
          </View>
          <View style={{ justifyContent: 'flex-end', height: '100%' }}>
          <View style={{ position: 'absolute', alignSelf: 'flex-start' }}>
              <Image
                style={{ height: 155, width: 65, marginBottom: 100}}
                source={require('../../../../../assets/img/DadosPessoais/esquerdo.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end'}}>
              <Image
                style={{ height: 150, width: 120,}}
                source={require('../../../../../assets/img/DadosPessoais/inferiorDireito.png')}
              />
            </View>
          </View>
        </View>
        
        <View style={{paddingHorizontal: 10}}>
            <View style={{ flexDirection: 'row', alignItems: 'center'}}>
              <Pressable onPress={() => navigation.navigate('Perfil')}>
                <Image
                  style={{ height: 30, width: 30 }}
                  source={require('../../../../../assets/img/Feedback/back.png')}
                />
              </Pressable>
              <Text style={styles.titulo}>Dados Pessoais</Text>
            </View>
            <Text style={styles.texto2}>O Cola Aí utiliza esses dados para manter sua segurança e elegibilidade de  perfil único.</Text>
        </View>
        <View style={styles.formulario}>
          <View>
            <Text style={styles.texto}>Título</Text>
            <TextInput placeholder='Nome do Usuário' placeholderTextColor={'grey'} style={styles.input}></TextInput>
          </View>
          <View>
            <Text style={styles.texto}>E-mail</Text>
            <TextInput placeholder='E-mail do Usuário' placeholderTextColor={'grey'} style={styles.input}></TextInput>
          </View>
          <View>
            <View style={{flexDirection: 'row', justifyContent: 'space-between'}}>
                <Text style={styles.texto}>Senha</Text>
                <Pressable onPress={SenhaVisivel}>
                    <Image
                    style={{ height: 20, width: 36, marginTop: 40, }}
                    source={require('../../../../../assets/img/DadosPessoais/senha.png')}
                    />
                </Pressable>
            </View>

            <TextInput placeholder='*******' placeholderTextColor={'grey'} secureTextEntry={senhaVisivel} style={styles.input}></TextInput>
          </View>
          
          <View style={{alignItems: 'flex-end'}}>
            <Pressable style={styles.enviar}>
              <Text style={{color: '#6d9eaf', fontSize: 20}}>Enviar</Text>
            </Pressable>
          </View>

        </View>
      </View> 
  );
};