import { View, Text, Pressable, Image,} from 'react-native';
import styles from '../../../../Components/Styles/Sobre/SobreStyle';

export default function Sobre({ navigation }) {

  return (
      <View style={styles.container}>
        <View style={{ position: 'absolute', width: '100%', height: '100%'}}>
          <View style={{ justifyContent: 'flex-start' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-end' }}>
              <Image
                style={{ height: 55, width: 45 }}
                source={require('../../../../../assets/img/Sobre/superiorDireito.png')}
              />
            </View>
          </View>
          <View style={{ justifyContent: 'flex-end', height: '100%' }}>
            <View style={{ position: 'absolute', alignSelf: 'flex-start' }}>
              <Image
                style={{ height: 100, width: 72, marginBottom: 200}}
                source={require('../../../../../assets/img/Sobre/inferiorEsquerdo.png')}
              />
            </View>
            <View style={{ position: 'absolute', alignSelf: 'flex-end'}}>
              <Image
                style={{ height: 160, width: 125,}}
                source={require('../../../../../assets/img/Sobre/inferiorDireito.png')}
              />
            </View>
          </View>
      </View>
        
        <View style={{paddingHorizontal: 30}}>
            <View style={{ flexDirection: 'row', alignItems: 'center', alignSelf: 'flex-start'}}>
              <Pressable onPress={() => navigation.navigate('Perfil')}>
                <Image
                  style={{ height: 30, width: 30 }}
                  source={require('../../../../../assets/img/Feedback/back.png')}
                />
              </Pressable>
              <Text style={styles.titulo}>Sobre</Text>
            </View>
            <Image
                style={{ height: 140, width: 340, alignSelf: 'center'}}
                source={require('../../../../../assets/img/Sobre/logoColaAi.png')}
            />
        </View>
        <View style={styles.formulario}>
            <Text style={styles.texto}>A  premissa do aplicativo foi iniciada após a união de um grupo para desenvolver um projeto de conclusão de curso. </Text>
            <Text style={styles.texto}>O  projeto Cola aí foi fundado pela empresa Magma, sendo todos parceiros e alunos do curso de Desenvolvimento de Sistemas da ETEC de Guaianazes.</Text>
        </View>
      </View> 
  );
};